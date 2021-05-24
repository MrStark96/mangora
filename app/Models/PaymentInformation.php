<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentInformation extends Model
{
    use HasFactory;
    public $table = 'payment_information';
    protected $fillable = ['restaurant_id','first_name','last_name','email','phone_number','address','payment_method'];
}
