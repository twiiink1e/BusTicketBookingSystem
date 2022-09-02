<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'road_id',
        'origin_province_id',
        'destination_province_id',
        'dep_date',
        'dep_time',
        'arrival_time',
        'bus_id',
        'price',
        'available'
    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function province_origin(){
        return $this->hasOne(Province::class , 'id', 'origin_province_id');
    }
    
    public function province_destination(){
        return $this->hasOne(Province::class , 'id', 'destination_province_id');
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public function getDepdateAttribute($value)
    {
        return Carbon::parse($value)->format('d F Y');
    }

    public function getDeptimeAttribute($value)
    {
        return Carbon::parse($value)->format('h:i A');
    }

    public function getArrivaltimeAttribute($value)
    {
        return Carbon::parse($value)->format('h:i A');
    }

}
