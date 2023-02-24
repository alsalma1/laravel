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
            echo 'a';
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