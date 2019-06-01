<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;

class RecipesApiController extends Controller
{
    public function index(){
		return \App\Recipe::all();
	}
	
	public function show($idReceta)
	{
		return  \App\Recipe::find($idReceta); 
	}
	
	public function store(Request $request){
		
		return \App\Recipe::create($request->all());
	}
	
	public function update(Request $request, $id)
    {

			$row = \App\Recipe::findOrFail($id);
			$row->update($request->all());
			$row->idReceta =$request->idReceta;
			$row->nombreReceta =$request->nombreReceta;
			$row->descripcionReceta =$request->descripcionReceta;
			$row->save();
			//return $request->all();
			return $row;
		
    }
	
	public function delete($nombreReceta)
	{
		$recipes = \App\Recipe::findOrFail($nombreReceta);
		$recipes->delete();
		
		
	}
}
