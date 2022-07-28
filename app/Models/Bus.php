<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected  $fillable = [ 'busname', 'seat'];

    public function trips(){
        return $this->hasMany(Trip::class);
    }
    
}

