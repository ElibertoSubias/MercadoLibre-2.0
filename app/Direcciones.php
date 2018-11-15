<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;  
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Direcciones extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'direcciones'; 
    protected $primarykey = 'id';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'calle', 'numeroEx', 'numeroInt', 'entrecalles', 'referencia', 'codigopostal', 'asentamiento', 'municipio', 'estado','idUser', 'telefono','contacto', 'envio',
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
