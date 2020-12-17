<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'tiposeguro', 'comision', 'observaciones'
    ];

    public function formulario(){
        return $this->belongsTo(Formulario::class);
    }
}
