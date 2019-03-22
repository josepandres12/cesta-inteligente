<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\estudiante;
use DB;
use App\Quotation;

class local extends Controller
{
    public function VerDatos()
	{
		
		$users = DB::table('propiedad')
		->orderBy('Ubicacion','desc')	
		->get();
		foreach ($users as $user)
		{
			echo "Nombre: ".$user -> Nombre."/ ";
			echo "Tipo Propiedad: ".$user -> Tipo."/ ";
			echo "Precio: ".$user -> Precio."/ ";
			echo "Ubicacion: ".$user -> Ubicacion."/ ";
			echo "</p>";
			
		}
	}
	
	public function VerDatosUbicacion()
	{
		
		$users = DB::table('propiedad')
		->orderBy('Ubicacion','desc')	
		->get();
		foreach ($users as $user)
		{
			echo "Nombre: ".$user -> Nombre."/ ";
			echo "Tipo Propiedad: ".$user -> Tipo."/ ";
			echo "Precio: ".$user -> Precio."/ ";
			echo "Ubicacion: ".$user -> Ubicacion."/ ";
			echo "</p>";
			
		}
	}
	
	
	public function VerDatosTipo()
	{
		
		$users = DB::table('propiedad')
		->orderBy('Tipo','desc')	
		->get();
		foreach ($users as $user)
		{
			echo "Nombre: ".$user -> Nombre."/ ";
			echo "Tipo Propiedad: ".$user -> Tipo."/ ";
			echo "Precio: ".$user -> Precio."/ ";
			echo "Ubicacion: ".$user -> Ubicacion."/ ";
			echo "</p>";
			
		}
	}
	
	public function VerDatosPrecio()
	{
		
		$users = DB::table('propiedad')
		->orderBy('Precio','desc')	
		->get();
		foreach ($users as $user)
		{
			echo "Nombre: ".$user -> Nombre."/ ";
			echo "Tipo Propiedad: ".$user -> Tipo."/ ";
			echo "Precio: ".$user -> Precio."/ ";
			echo "Ubicacion: ".$user -> Ubicacion."/ ";
			echo "</p>";
			
		}
	}
}
