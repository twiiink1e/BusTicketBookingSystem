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

}

