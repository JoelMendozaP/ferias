<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feria extends Model
{
    protected $table='feria';
    protected $primaryKey='idFeria';

    public $timestamps=false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'objetivo',
        'cantStand',
        'telefono',
        'ciudad',
        'localidad',
        'calle' 
    ];
    protected $guarded =[

    ];
}
