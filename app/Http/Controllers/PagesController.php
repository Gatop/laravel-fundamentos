<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home() {
        return view('home');
    }

    public function contact() {
        return view('contactos');
    }

    public function mensajes(Request $request) {
        // filled para 5.5, has para older version
        if ($request->filled('nombre')) {
            return "Si tiene nombre. Es " . $request->input('nombre');
        }
        return "No tiene nombre";
    }

    public function saludo($nombre = 'invitado') {
        $html = "<h2>Contenido html</h2>";
        $script = "<script>alert('Hola injection')</script>";
        $consolas = [
            'consola 1',
            'consola 2',
            'consola 3'
        ];
        //return view('saludo', ['nombre'=> $nombre]);
        //return view('saludo')->with(['nombre'=> $nombre]);

        // return the value stored in the variable
        return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
    }
}
