<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recipe;

class RecipesController extends Controller
{
    public function index(){
		$recipes = Recipe::all();

        return view('recipes.index', compact('recipes'));
	}
	
	public function create(){
		return view('recipes.create');
	}
	
	public function store(Request $request){
		$request->validate([
            'idReceta'=>'required',
            'nombreReceta'=>'required',
            'descripcionReceta'=>'required'
        ]);

        $recipe = new Recipe([
            'idReceta' => $request->get('idReceta'),
            'nombreReceta' => $request->get('nombreReceta'),
            'descripcionReceta' => $request->get('descripcionReceta')
        ]);
        $recipe->save();
        return redirect('/recipes')->with('success', 'Recipe saved!');
	}
	
	public function show($id){
		
	}
	
	public function edit($id){
		$recipe = Recipe::find($id);
        return view('recipes.edit', compact('recipe'));  
	}
	
	public function update(Request $request, $id)
    {
        $request->validate([
            'idReceta'=>'required',
            'nombreReceta'=>'required',
            'descripcionReceta'=>'required'
        ]);

        $recipe = Recipe::find($id);
        $recipe->idReceta =  $request->get('idReceta');
        $recipe->nombreReceta = $request->get('nombreReceta');
        $recipe->descripcionReceta = $request->get('descripcionReceta');
        $recipe->save();

        return redirect('/recipes')->with('success', 'Recipe updated!');
    }
	
	public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();

        return redirect('/recipes')->with('success', 'Recipe deleted!');
    }
}
