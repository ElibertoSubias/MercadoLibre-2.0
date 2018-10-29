<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;  
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Articulos extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'articulos'; 
    protected $primarykey = 'id';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idUser','titulo', 'precio', 'moneda', 'estado', 'municipio', 'colonia', 'telefono', 'categoria', 'modelo', 'marca', 'anio', 'urlvideo', 'numPuertas', 'kilometros','tipoPublicacion','idPublicacion','descripcion', 'estado', 'arrayCaracteristicas', 'horarioContacto', 'color', 'tipoCombustible', 'motor', 'direccionAuto', 'transmicion', 'version','urlPrincipal','estadoPublicacion','cantidad',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
