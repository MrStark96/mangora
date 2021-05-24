<?php

use App\Http\Controllers\Common\v1\ImageGlideController;
use App\Http\Controllers\Web\v1\DocumentWallet;
use App\Models\{Country};
use DB as DBS;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Web\v1\CartController as CartCtrl;

class Admin
{
    public static function RandomPassword( $length = 8 ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
    }

}
