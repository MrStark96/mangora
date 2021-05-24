<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantCuisines extends Model
{
    use HasFactory;
    public $table = 'restaurant_cuisines';
    protected $fillable = ['restaurant_id','cuisines_id'];
}
