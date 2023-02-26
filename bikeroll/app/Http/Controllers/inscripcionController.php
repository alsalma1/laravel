<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;

class inscripcionController extends Controller
{
    //
    function inscribir(Request $request){
        // echo $request->nombre;
        // echo $request->apellido;
        // echo $request->fecha;




        Inscription::create([
            'runner_id'=>$request->runner,
            'race_id'=>$request->id,
            'id_insurances'=>$request->aseguradora,
            'qr'=>'',
            'PayPal_email'=>'',
            'finish_time'=>NULL
        ]);
}
}