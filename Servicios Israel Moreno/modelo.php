<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    public $timestamps=false;
    protected $table='Ventas';
    protected $primaryKey='id';
    protected $fillable=['id','ventas','satisfaccion','local'];
}
