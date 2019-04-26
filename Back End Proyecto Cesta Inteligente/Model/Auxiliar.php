<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auxiliar extends Model
{
    public $incrementing = false;
	
	protected $fillable = [
        'id',
        'id_Receta',
        'id_Fruta'      
    ];
}
