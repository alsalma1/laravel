<?php

namespace App\Http\Controllers;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class sponsorController extends Controller
{
    public function index(){
        $sponsor = Sponsor::all();
        return view("admin.sponsors.mostrarSponsors" , [
            'sponsor' => $sponsor
        ]);
    }

    public function create(Request $request){
        if(isset($_POST['create'])){
            $sponsor = Sponsor::create([
                'name' => $request->input('name'),
                'description' => $request->input('desc'),
                'logo' => $request->file('logo'),
                'main_plain' => $request->input('pp')
            ]);
            $sponsor->save();
        }        
        else{
            return view('admin.sponsors.anyadirSponsor');
        }
    }
}
