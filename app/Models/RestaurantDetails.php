<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantDetails extends Model
{
    use HasFactory;
    public $table = 'restaurant_details';
    protected $fillable = ['restaurant_name','restaurant_phone','manager_name','manager_contact_phone','manager_contact_phone','contact_email','country','state','city','latitude','longitude','address','deliver_type'];
}
