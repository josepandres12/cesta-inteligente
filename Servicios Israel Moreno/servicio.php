<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class demoguzzle extends Controller
{
    //
    function consultarPosts()
    {
        $cliente=new Client();
        $resultado=$cliente->get('https://jsonplaceholder.typicode.com/posts');
        //print_r($resultado);
       // $listadoPosts=json_decode($resultado);
        return view('vistaGuzzle',['listadoPosts'=> json_decode($resultado->getBody())]);
    }
}
