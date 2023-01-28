<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aseguradoraController extends Controller
{
    public function index(){
        //Mostrar todas las aseguradoras
        return view('admin.aseguradoras.mostrarTodosAs');
    }

    public function create(){
        //Formulario para crear una aseguradora
        return view('admin.aseguradoras.anyadirAseguradora');
    }

    public function edit(){
        //Formulario para modificar una aseguradora
        return view('admin.aseguradoras.editarAseguradora');
    }
}
