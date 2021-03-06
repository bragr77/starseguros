<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'formularios';


    public function dependientes(){
        return $this->hasMany(Dependiente::class);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }
}
