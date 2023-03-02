<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Runner;
use PDF;

class inscripcionController extends Controller{
    public function showRunners(Request $request){
        $id = $request->id;
        if(isset($_POST['buscador'])){
            $buscador = $request->input('buscador');
            $runners = DB::table('inscriptions')
            ->join('runners', 'inscriptions.runner_id', '=', 'runners.id')
            ->select('inscriptions.*', 'runners.*')
            ->where('inscriptions.race_id', '=', $id)
            ->where(function($query) use ($buscador){
                $query->where('runners.name', 'LIKE', '%'.$buscador.'%')
                      ->orWhere('runners.last_name', 'LIKE', '%'.$buscador.'%')
                      ->orWhere('runners.sex', 'LIKE', '%'.$buscador.'%')
                      ->orWhere('runners.adress', 'LIKE', '%'.$buscador.'%')
                      ->orWhere('runners.points', 'LIKE', '%'.$buscador.'%');
            })
            ->get();
        }
        else{
            //Juntar las tablas runners , carrera y inscription
            $runners = DB::table('inscriptions')
            ->join('runners', 'inscriptions.runner_id', '=', 'runners.id')
            ->select('inscriptions.*', 'runners.*')
            ->where('inscriptions.race_id', '=', $id)
            ->get();
        }
        return view('admin.inscripciones.runnersRace' ,[
            'runners' => $runners , 'id' => $id
        ]);
    }

    public function downloadPdf(){
        $inscription = Inscription::all();

        view()->share('users.pdf',$inscription);

        $pdf = PDF::loadView('admin.inscripciones.generatePDF', ['inscription' => $inscription]);

        return $pdf->download('inscripciones.pdf');
    }

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
