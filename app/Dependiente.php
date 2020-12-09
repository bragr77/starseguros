<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependiente extends Model
{
    protected $table = 'dependientes';

    protected $fillable = [
        'nombre', 'genero', 'fechan', 'relacion', 'estatus', 'ssn',
    ];

    public function formulario(){
        return $this->belongsTo(Formulario::class);
    }
}
