<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

//Facades
use Hash;

class User extends Authenticatable
{
    use Notifiable;

    /* Nombre de la tabla   */
    protected $table = 'terceros';

    /* Llave primaria de la tabla   */
    protected $primaryKey = 'id_tercero' ;

    /* campos que será capturados desde formularios   */
    protected $fillable = [ 'nom_usuario', 'email','password'  ];

    /* campos que estarán ocultos   */
    protected $hidden = ['Password', 'remember_token', ];

    /* Campos que será tratados como fechas   */
    protected $dates = ['created_at', 'updated_at', 'deleted_at',];



    //////////////////////////////////////////////////////////////////////
    /* MUTATORS:  Modifican datos antes de que lleguen a la base de datos
    ////////////////////////////////////////////////////////////////////*/

    public function setPassUsuarioAttribute ( $value ){
        $this->attributes['pass_usuario'] = Hash::make( $value );
    }

    public function setEmailAttribute ( $value ){
        $this->attributes['email']          = mb_strtolower( $value,'UTF-8');
    }

    public function setNomUsuarioAttribute ( $value ){
        $this->attributes['nom_usuario']    = mb_strtoupper( $value,'UTF-8');
    }




}
