<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function origin(){
        return $this->belongsTo(Road::class, 'id', 'origin_province_id');
    }

    public function destination(){
        return $this->belongsTo(Road::class, 'id', 'destination_province_id');
    }
}
