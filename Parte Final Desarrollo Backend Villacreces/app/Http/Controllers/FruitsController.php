<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fruit;

class FruitsController extends Controller
{
    public function index(){
		$fruits = Fruit::all();

        return view('fruits.index', compact('fruits'));
	}
	

	
	public function store(Request $request){
		

		$request->validate([
            'idFruta'=>'required',
            'nombreFruta'=>'required',
            'pesoFruta'=>'required'
        ]);

        $fruit = new Fruit([
            'idFruta' => $request->get('idFruta'),
            'nombreFruta' => $request->get('nombreFruta'),
            'pesoFruta' => $request->get('pesoFruta')
        ]);
        $fruit->save();
		return $fruit;
        //return redirect('/fruits')->with('success', 'Fruit saved!');
	}
	
	public function show($id){
		
	}
	
	public function edit($id){
		$fruit = Fruit::find($id);
        return view('fruits.edit', compact('fruit'));  
	}
	
	public function update(Request $request, $id)
    {

		
        $request->validate([
            'idFruta'=>'required',
            'nombreFruta'=>'required',
            'pesoFruta'=>'required'
        ]);

        $fruit = Fruit::find($id);
        $fruit->idFruta =  $request->get('idFruta');
        $fruit->nombreFruta = $request->get('nombreFruta');
        $fruit->pesoFruta = $request->get('pesoFruta');
        $fruit->save();

        return redirect('/fruits')->with('success', 'Fruit updated!');
    }
	
	public function destroy($id)
    {
        $fruit = Fruit::find($id);
        $fruit->delete();

        return redirect('/fruits')->with('success', 'Fruit deleted!');
    }
}
