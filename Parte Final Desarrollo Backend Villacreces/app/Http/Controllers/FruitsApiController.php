<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fruit;

class FruitsApiController extends Controller
{
    public function index(){
		return \App\Fruit::all();
	}
	
	public function show($idFruta)
	{
		return  \App\Fruit::find($idFruta); 
	}
	
	public function store(Request $request){
		
		return \App\Fruit::create($request->all());
	}
	
	public function update(Request $request, $id)
    {

			$row = \App\Fruit::findOrFail($id);
			$row->update($request->all());
			$row->idFruta =$request->idFruta;
			$row->nombreFruta =$request->nombreFruta;
			$row->pesoFruta =$request->pesoFruta;
			$row->save();
			//return $request->all();
			return $row;
		
    }
	
	public function delete($idFruta)
	{
		$fruits = \App\Fruit::findOrFail($idFruta);
		$fruits->delete();
		
		
	}
	
	
}
