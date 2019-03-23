<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fruta;

class Fruta extends Controller
{
         public function verFrutas($referencia)
        {
            if ($referencia=="TODOS")
            {
                $frutas=\App\Fruta::all();
                
            }
            else if($referencia=="Manzana")
             {
    
                $frutas= \App\Fruta::where('nombre',$referencia)
                                            ->orderBy('nombre','ASC')
                                            ->get();
                
                
            
            }
            else if($referencia=="Pera")
             {
    
                $frutas= \App\Fruta::where('nombre',$referencia)
                                            ->orderBy('nombre','ASC')
                                            ->get();
                
                
            
            }
            else if($referencia=="Durazno")
             {
    
                $frutas= \App\Fruta::where('nombre',$referencia)
                                            ->orderBy('nombre','ASC')
                                            ->get();
                
                
            
            }
            return view('vista1',array('frutas'=>$frutas));
    
        }
        public function verificarFrutas()
        {
               $frutas= \App\Fruta::where('cantidad','>',0);
               return view('vista1',array('frutas'=>$frutas));                            
        }
            
}

