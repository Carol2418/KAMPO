<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'crops',
        'land_type',
        'users_id'
    ];
    public function user()
{
    return $this->belongsTo(User::class, 'users_id');
}

}
