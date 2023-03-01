<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Runner;

class inscripcionController extends Controller
{
    //
    function inscribir(Request $request){
        // echo $request->nombre;
        // echo $request->apellido;
        // echo $request->fecha;

        if (isset($_POST['pagar'])){
            if (request('option')=='si'){
                Inscription::create([
                    'runner_id'=>$request->runner,
                    'race_id'=>$request->id,
                    'id_insurances'=>$request->aseguradora,
                    'qr'=>'',
                    'PayPal_email'=>'',
                    'finish_time'=>NULL
                ]);

                return redirect()->route('paypal');
            }
            else{
                $runner=Runner::find($request->runner)->delete();
                echo 'borrado';


            }
        }
        else{
            return view('corredor.pago',[
                'runner' => $request->runner,
                'race' => $request->id,
                'insurance' => $request->aseguradora
            ]);
        }
        
}
}