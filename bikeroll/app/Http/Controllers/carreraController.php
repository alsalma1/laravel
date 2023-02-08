<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;

class carreraController extends Controller
{
    public function addRace(Request $request){
        
        if(isset($_POST['send']) && Race::where('description',request('description'))->count()==0){
            Race::create([
                'description'=>request('description'),
                'unevenness'=>request('unevenness'),
                'image'=>request('image'),
                'number_participants'=>request('number_participants'),
                'km'=>request('km'),
                'date'=>request('date'),
                'promotion'=>request('promotion'),
                'start'=>request('start'),
                'state'=>1,
                'price'=>request('price')
               

            ]);  

            //subir la imagen
            if($request->hasFile('image')){
                $imagen = $request->file('image');
                $promotion = $request->file('promotion');

                //aquí le asignamos el nombre
                $nombreimagen = Str::slug($request->file('image')).".".$imagen->guessExtension();
                $nombreprom = Str::slug($request->file('promotion')).".".$promotion->guessExtension();

                //y la ruta
                $ruta = public_path("../resources/img/");
    
                //$imagen->move($ruta,$nombreimagen);
                copy($imagen->getRealPath(),$ruta.$nombreimagen);     
                copy($promotion->getRealPath(),$ruta.$nombreprom);     
                
            }
        }
        else{
            echo "Esta carrera ya ha sido creada";
        }

        return redirect('/anyadirCarrera');
    }

    public function showAddRace(){
        return view('admin.carreras.anyadirCarrera');
    }


    public function showEditRace(){
        $carreras = Race::all();
        return view('admin.carreras.editarCarrera',[
            'carreras' => $carreras
        ]);  
        //echo $carreras;
    }

    public function deleteRace(){
        return view('admin.carreras.desactivarCarrera');

    }
}
