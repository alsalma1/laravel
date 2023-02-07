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
            return redirect()->route('mostrarSponsors');
        }        
        else{
            return view('admin.sponsors.anyadirSponsor');
        }
    }

    public function activate(Request $request){
        $id = $request->id;
        $sponsor = Sponsor::find($id);
        $estado = $sponsor->sponsorState;
        if($estado==1){
            $estado = $sponsor->sponsorState = 0;
            echo $estado;
        }
        else{
            $sponsor->sponsorState = 1;
        }
        $sponsor->save();
        return redirect('mostrarSponsors');   
    }

    public function edit(Request $request){
        $id = $request->id;
        $sponsor = Sponsor::find($id);
        //Si se envian datos , modifica el registro
        if ($request->isMethod('post')){
            $sponsor->name = $request->input('name');
            $sponsor->description = $request->input('desc');
            $sponsor->main_plain = $request->input('pp');
            $sponsor->save();
            echo $sponsor['main_plain'];
            return redirect('mostrarSponsors');
        }      
        else{
            return view('admin.sponsors.editarSponsor' ,[
                'sponsor' => $sponsor
            ]);
        }
    }

    public function editLogo(Request $request){
        $id = $request->id;
        $sponsor = Sponsor::find($id);
        if ($request->isMethod('post')){
            $sponsor->logo = $request->file('logo');
            $sponsor->save();
            return redirect('mostrarSponsors');
        }      
        else{
            return view('admin.sponsors.editarLogo' ,[
                'sponsor' => $sponsor
            ]);
        }
    }
}
