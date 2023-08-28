<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origenprospecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function prospectos(){
        return $this->hasMany(Prospecto::class);
    }
}