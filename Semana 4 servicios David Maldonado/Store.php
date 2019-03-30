<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
	protected $timestamps = false;
	protected $fillable = ['nombre_fruta','valor'];

}
