<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patronize;
use App\Models\Sponsor;
use App\Models\Race;


class patronizeController extends Controller
{
    public function showSponsors(){
        $sponsors = Sponsor::all();
        $races = Race::all();
        return view('admin.patronizar.sponsorCarrera' , [
            'sponsors' => $sponsors , 'races' => $races
        ]);
    }

    public function showRaces(Request $request){
        $id = $request->id;
        if(isset($_POST['select'])){
            Patronize::create([
                'sponsor_id'=>$id,
                'race_id' => $request->input('racescheck')
            ]); 
            $sponsor = Sponsor::all(); 
            return view("admin.sponsors.mostrarSponsors" , [
                'sponsor' => $sponsor
            ]);
        }
        else{
            $races = Race::all();
            return view('admin.sponsors.elegirCarreras' , [
                'races' => $races , 'id' => $id
            ]);
        }
    }
}
