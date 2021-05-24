<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{Country,State,City};

 use Illuminate\Support\Facades\Auth;

class CommonController extends Controller
{
    public function __construct()
    {
   
    }
   
   public function GetStateByCountry(Request $request){
        $id = request('id');
        $states = State::where('country_id',$id)->get();
        $html = '<option value="">Select State</option>';
        foreach ($states as $key => $value) {
            $html .= '<option value="'.$value->id.'">'.$value->name.'</option>';
        }
        return $html;
   }

    public function GetCityByState(Request $request){
        $id = request('id');
        $cities =  City::where('state_id',$id)->get();
        $html = '<option value="">Select City</option>';
        foreach ($cities as $key => $value) {
            $html .= '<option value="'.$value->id.'">'.$value->name.'</option>';
        }
        return $html;
    }
    
    public function changeAccountPassword(Request $request,$redirect_to = '') {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return back()->with('alert-error', $errors->first())->withInput();
        }

        //check old password
        $hasher = Sentinel::getHasher();
        $user = Sentinel::getUser();
        if(!$hasher->check(request('old_password'), $user->password)) {
            return back()->with('alert-error', "Incorrect old password")->withInput();
        }

        //update new password
        $update = Sentinel::update($user,  array('password' => request('new_password')));

        // if(config('setting.YourPasswordChanged')) {
        //     //send notification
        //     $full_name = $user->first_name . ' ' . $user->last_name;
        //     Mail::to($user->email)->queue(new YourPasswordChangedMail($full_name));
        // }

        if($user) {
            if($redirect_to) {
                return redirect()->route($redirect_to)->with('alert-success', 'Your password updated successfully');
            } else {
                return redirect()->route('user.setting')->with('alert-success', 'Your password updated successfully');
            }
        } else {
            return back()->with('alert-error', "Oops..! Something went wrong.")->withInput();
        }

    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}

