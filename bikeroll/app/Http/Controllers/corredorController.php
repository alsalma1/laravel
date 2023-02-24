<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Runner;
use App\Models\Race;

class corredorController extends Controller
{
    //
    public function showForm(Request $request){
        if(isset ($_POST['inscription'])){
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


            Runner::create([
                'name'=>request('nombre'),
                'last_name'=>request('surname'),
                'adress'=>request('direction'),
                'birth_date'=>request('birth'),
                'sex'=>$sex,
                'pro'=>$pro,
                'federation_number'=>request('fed'),
                'points'=>0

            ]);
            return redirect('/');
        }
        else{
        $id = $request->id;
        $races = Race::find($id);
        return view('corredor.altaCorredor',[
            'races' => $races
        ]);
        }
    }


}