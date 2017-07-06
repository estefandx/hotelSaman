<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'imagenes';
    protected $primaryKey = "id";
    public     $timestamps = false;

    protected $fillable = [
        'nombre', 'seccion',
    ];
}
