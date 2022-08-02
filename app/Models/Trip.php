<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'origin',
        'destination',
        'dep_date',
        'dep_time',
        'arrival_time',
        'bus_id',
        'price'
    ];

    public function bus(){
        return $this->belongsTo(Bus::class);
    }

    public function getDepdateAttribute($value){
        return Carbon::parse($value)->format('d F Y');
    }

    public function getDeptimeAttribute($value){
        return Carbon::parse($value)->format('h:i A');
    }

    public function getArrivaltimeAttribute($value){
        return Carbon::parse($value)->format('h:i A');
    }

    // public function RoadProviceOrigin()
    // {
    //     return $this->hasOneThrough(
    //         Province::class,
    //         Road::class,
    //         'id', // Foreign key on the cars table...
    //         'id', // Foreign key on the owners table...
    //         'road_id', // Local key on the mechanics table...
    //         'origin_province_id' // Local key on the cars table...
    //     );
    // }

    // public function RoadProviceDestination()
    // {
    //     return $this->hasOneThrough(
    //         Province::class,
    //         Road::class,
    //         'road_id', // Foreign key on the cars table...
    //         'destination_province_id', // Foreign key on the owners table...
    //         'id', // Local key on the mechanics table...
    //         'id' // Local key on the cars table...
    //     );
    // }

}

