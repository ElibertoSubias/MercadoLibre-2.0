<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;  
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Comentarios extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'comentarios'; 
    protected $primarykey = 'id';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pregunta', 'nomEmisor',  'idEmisor',  'estadoMsj', 'fechaRegistro', 'publicacion', 'respuesta', 'vendedor',
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