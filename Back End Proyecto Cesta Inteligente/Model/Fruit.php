<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{

	public $incrementing = false;
	protected $primaryKey = 'idFruta';
	
	protected $fillable = [
        'idFruta',
        'nombreFruta',
        'pesoFruta'      
    ];
}
