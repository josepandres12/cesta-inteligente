<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public $incrementing = false;
	public $timestamps = false;
	protected $primaryKey = 'idFruta';
	
	protected $fillable = [
        'idFruta',
        'nombreFruta',
        'pesoFruta'      
    ];
}
