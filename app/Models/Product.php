<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'expiration_date',
        'quantity_units' ,
        'minimum_value' ,
        'image' ,
        'packaging',
        'unit_value' ,
        'farmers_id'
    ];
}
