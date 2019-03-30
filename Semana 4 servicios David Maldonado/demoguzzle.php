<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;


class demoguzzle extends Controller
{
    function consultarPosts()
    {
        $cliente = new Client();
        $resultado = $cliente->get('https://jsonplaceholder.typicode.com/posts');
        
        
        return view('vistaguzzle',['listadoPosts'=> json_decode($resultado ->getBody()) ]);
    }
}
