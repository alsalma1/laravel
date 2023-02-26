<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Runner;
use App\Models\Race;
use App\Models\Insurance;


class corredorController extends Controller
{
    //
    public function showForm(Request $request){
        //común para enviar a inscripciones y form
        $id = $request->id;
        $races = Race::find($id);


        if(isset ($_POST['inscription'])){

            $nombre=request('nombre');
            $apellido=request('appelido');
            $bith=request('birth');

            if(request('sexo')=='masculino'){
                $sex=1;
            }
            else{
                $sex=0;
            }


            if(request('pro')=='pro'){
                $pro=1;
            }
            else{
                $pro=0;
            }


            $runner=Runner::create([
                'name'=>request('nombre'),
                'last_name'=>request('surname'),
                'adress'=>request('direction'),
                'birth_date'=>request('birth'),
                'sex'=>$sex,
                'pro'=>$pro,
                'federation_number'=>request('fed'),
                'points'=>0

            ]);
            // $corredor=DB::table('runners')->where('name', request('nombre') );
            $nameAs=request('aseguradora');

            $As=Insurance::where('name', $nameAs)->first();
            //hacerlo así si no peta(poner nombre en la ruta!!)
            

         return redirect()->route('ins',[
                'runner'=>$runner->id,
                'id'=> request('id'),
                'aseguradora' => $As->id
          ]);
            
        }
        else{
        return view('corredor.altaCorredor',[
            'races' => $races,
            'aseguradoras' => Insurance::all()
        ]);
        }

    }


}