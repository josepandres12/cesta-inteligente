<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Login;

class LoginApiController extends Controller
{
    public function index(){
		return \App\Login::all();
	}
	
	public function show($id)
	{
		return  \App\Login::find($id); 
	}
	
	public function store(Request $request){
		
		return \App\Login::create($request->all());
	}
	
	public function update(Request $request, $id)
    {

			$row = \App\Login::findOrFail($id);
			$row->update($request->all());
			$row->user =$request->user;
			$row->password =$request->password;
			$row->save();
			//return $request->all();
			return $row;
		
    }
	
	public function delete($id)
	{
		$login = \App\Login::findOrFail($id);
		$login->delete();
		
		
	}
}
