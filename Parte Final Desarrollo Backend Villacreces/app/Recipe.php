<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{

	public $incrementing = false;
	protected $primaryKey = 'idReceta';
	
    protected $fillable = [
        'idReceta',
        'nombreReceta',
        'descripcionReceta'      
    ];
}
