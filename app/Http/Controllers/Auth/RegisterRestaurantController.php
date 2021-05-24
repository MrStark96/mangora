<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User,Country,State,City,Cuisine,PaymentInformation,RestaurantCuisines,RestaurantDetails,RestaurantPackage};
use Session,Admin;
use Illuminate\Support\Facades\Hash;

class RegisterRestaurantController extends Controller
{
    public function RegisterRestaurant(){
    	// echo 1;die;
        $countries= Country::get();
        $cuisines = Cuisine::get();
    	return view('auth.register-restaurant',compact('countries','cuisines'));
    }

    public function RegisterSelectPackage(){
    	// echo 1;die;
    	return view('auth.register-select-package');
    }

    public function RegisterpaymentInfo(){
    	// echo 1;die;
    	return view('auth.register-payment-info');
    }

    public function RegisterActivation(){
    	// echo 1;die;
    	return view('auth.register-activation');
    }

    public function PostRegisterRestaurant(Request $request){
        if(Session::has('cart_step_one'))
        {
            Session::forget('cart_step_one');
        }
        Session::push('cart_step_one',$request->all());
        // echo '<pre>';
        // print_r(session()->all());
        // die;
        return redirect('register-select-package');     
    }

    public function PostRegisterSelectPackage(Request $request){
        if(Session::has('cart_step_two'))
        {
            Session::forget('cart_step_two');
        }
        Session::push('cart_step_two', $request->all());
        return redirect('register-payment-info');
    }

    public function PostRegisterPaymentInfo(Request $request){
        if(Session::has('cart_step_three'))
        {
            Session::forget('cart_step_three');
        }
        Session::push('cart_step_three', $request->all());
        // echo '<pre>';
        $sessionData = session()->all();
        // print_r();
        $restaurantDetails = RestaurantDetails::create([
            'restaurant_name' => $sessionData['cart_step_one'][0]['restaurant_name'],
            'restaurant_phone' => $sessionData['cart_step_one'][0]['restaurant_phone'],
            'manager_name' => $sessionData['cart_step_one'][0]['manager_name'],
            'manager_contact_phone' => $sessionData['cart_step_one'][0]['manager_contact_phone'],
            'contact_email' => $sessionData['cart_step_one'][0]['contact_email'],
            'country' => $sessionData['cart_step_one'][0]['country'],
            'state' => $sessionData['cart_step_one'][0]['state'],
            'city' => $sessionData['cart_step_one'][0]['city'],
            'latitude' => $sessionData['cart_step_one'][0]['latitude'],
            'longitude' => $sessionData['cart_step_one'][0]['longitude'],
            'address' => $sessionData['cart_step_one'][0]['address'],
            'deliver_type' => $sessionData['cart_step_one'][0]['deliver_type'],
        ]);

        RestaurantCuisines::

        $restaurantPackage = RestaurantPackage::create([
            'restaurant_id' => $restaurantDetails->id,
            'package_id' => $sessionData['cart_step_two'][0]['package_id']
        ]);

        PaymentInformation::create([
            'restaurant_id' => $restaurantDetails->id,
            'first_name' => $sessionData['cart_step_three'][0]['trans_first_name'],
            'last_name' => $sessionData['cart_step_three'][0]['trans_last_name'],
            'email' => $sessionData['cart_step_three'][0]['trans_email'],
            'phone_number' => $sessionData['cart_step_three'][0]['trans_phone_number'],
            'address' => $sessionData['cart_step_three'][0]['trans_address'],
            'payment_method' => $sessionData['cart_step_three'][0]['payment_method']
        ]);

        $hashed_random_password = Hash::make(Admin::RandomPassword(8));
        User::create([
            'name' => $sessionData['cart_step_one'][0]['username'],
            'username' => $sessionData['cart_step_one'][0]['username'],
            'email' => $sessionData['cart_step_one'][0]['email'],
            'password' => $hashed_random_password
        ]);
        echo '<pre>';
        // print_r(session()->all());
        echo $hashed_random_password;
        // die;
        return redirect('register-activation');
        // die;
    }

    
    

}
