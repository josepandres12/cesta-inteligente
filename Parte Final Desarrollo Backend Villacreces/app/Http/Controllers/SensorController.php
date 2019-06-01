<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tablasensor;

class SensorController extends Controller
{
    public function index(){
		return \App\tablasensor::all();
	}
}
