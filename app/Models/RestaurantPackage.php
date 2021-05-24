<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantPackage extends Model
{
    use HasFactory;
    public $table = 'restaurant_package';
    protected $fillable = ['restaurant_id','package_id'];
}
