<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tablasensor extends Model
{
    public $timestamps = false;
	
	protected $fillable = [
        'id',
        'weight'      
    ];
}
