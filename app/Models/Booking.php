<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'customer_id',
        'status',
        'seat',
    ];

    public function trip(){
        return $this->belongsTo(Trip::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
