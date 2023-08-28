<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prospecto;

class Convenio extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion'
    ];

    public function prospectos(){

        return $this->hasMany(Prospecto::class);
    }
}
