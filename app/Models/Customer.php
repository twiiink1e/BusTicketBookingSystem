<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'phone',
        'address',
        'user_id',
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function bookings(){
        return $this->hasMany(Trip::class);
    }
}

