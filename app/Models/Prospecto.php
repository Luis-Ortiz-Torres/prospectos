<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Convenio;
use App\Models\Origenprospecto;

class Prospecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoIdentificacion',
        'numeroIdentificacion',
        'primerNombre',
        'segundoNombre',
        'primerApellido',
        'segundoApellido',
        'direccion',
        'barrio',
        'municipio',
        'celular',
        'telefono',
        'correo',
        'fechaIngreso',
        'fechaPrimerContacto',
        'estado',
        'enteroBeneficios',
        'nombreReferido',
        'apellidoReferido',
        'telefonoReferido',
        'convenio_id',
        'origenprospecto_id'
    ];

    public function origenprospecto(){

        return $this->belongsTo(Origenprospecto::class);
    }

    public function convenio(){

        return $this->belongsTo(Convenio::class);
    }
}