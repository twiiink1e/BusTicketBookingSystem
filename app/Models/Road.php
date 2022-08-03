<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Road extends Model
{
    use HasFactory;

    protected $fillable = [
        'origin_province_id',
        'destination_province_id',
    ];

    public function province_origin(){
        return $this->hasOne(Province::class , 'id', 'origin_province_id');
    }
    
    public function province_destination(){
        return $this->hasOne(Province::class , 'id', 'destination_province_id');
    }

    public function trips(){
        return $this->hasMany(Trip::class);
    }
}
