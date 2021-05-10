<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterRestaurantController extends Controller
{
    public function RegisterRestaurant(){
    	// echo 1;die;
    	return view('auth.register-restaurant');
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


}
