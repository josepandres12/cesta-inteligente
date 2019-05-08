<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Login;

class LoginController extends Controller
{
     public function index(){
		$login = Login::all();

        return view('login.index', compact('login'));
	}
	
	public function create(){
		return view('login.create');
	}
	
	public function store(Request $request){
		$request->validate([
            'user'=>'required',
            'password'=>'required'
        ]);

        $login = new Login([
            'user' => $request->get('user'),
            'password' => $request->get('password')
        ]);
        $login->save();
        return redirect('/login')->with('success', 'User saved!');
	}
	
	public function show($id){
		
	}
	
	public function edit($id){
		$login = Login::find($id);
        return view('login.edit', compact('login'));  
	}
	
	public function update(Request $request, $id)
    {
        $request->validate([
            'user'=>'required',
            'password'=>'required'
        ]);

        $login = Login::find($id);
        $login->user =  $request->get('user');
        $login->password = $request->get('password');
        $login->save();

        return redirect('/login')->with('success', 'User updated!');
    }
	
	public function destroy($id)
    {
        $login = Login::find($id);
        $login->delete();

        return redirect('/login')->with('success', 'User deleted!');
    }
}
