<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Insurance;

class aseguradoraController extends Controller
{
    public function index(){
        if(isset($_SESSION['admin'])){
            //Mostrar todas las aseguradoras
            $insurance = Insurance::all();
            return view('admin.aseguradoras.mostrarTodosAs' , [
                'insurance' => $insurance
            ]);
        }
        else{
            $this->notLogin();
        }
    }

    //Añadir nueva aseguradora
    public function create(Request $request){
        if(isset($_SESSION['admin'])){
            $insurance = new Insurance();
            if(isset($_POST['create'])){
                $cif = $insurance->CIF = $_POST['cif'];
                //Si existe la clave primaria
                if (Insurance::where('CIF', $cif)->exists()) {
                    ?><script>alert("ya existe esta aseguradora!")</script><?php
                    return redirect('anyadirAseguradora');
                }
                else{
                    $insurance->name = $_POST['insuranceName'];
                    $insurance->address = $_POST['insuranceAdress'];
                    $insurance->save();
                    ?><script>alert("Se ha creado correctamente!")</script><?php
                    return redirect('mostrarTodosAs');
                }
            }        
            else{
                return view('admin.aseguradoras.anyadirAseguradora');
            }
        }
        else{
            $this->notLogin();
        }
    }

    public function activate(Request $request){
        if(isset($_SESSION['admin'])){
            $id = $request->id;
            $insurance = Insurance::find($id);
            $estado = $insurance->estado;
            if($estado==1){
                $estado = $insurance->estado = 0;
                echo $estado;
            }
            else{
                $insurance->estado = 1;
            }
            $insurance->save();
            $insurance = Insurance::all();
            
            return redirect('mostrarTodosAs');  
        }
        else{
            $this->notLogin();
        }
    }

    public function edit(Request $request){
        if(isset($_SESSION['admin'])){
            $id = $request->id;
            //Formulario para modificar una aseguradora
            $insurance = Insurance::find($id);
            //Si se envian datos , modifica el registro
            if ($request->isMethod('post')){
                $insurance->CIF = $request->input('cif');
                $insurance->name = $request->input('insuranceName');
                $insurance->address = $request->input('insuranceAdress');
                $insurance->save();
                $insurance = Insurance::all();
                return redirect('mostrarTodosAs');
            }      
            else{
                return view('admin.aseguradoras.editarAseguradora' ,[
                    'insurance' => $insurance
                ]);
            }
        }
        else{
            $this->notLogin();
        }
    }

    public function notLogin(){
        ?>
        <script>alert("Inicia sesión para ver esta página!")</script>
        <?php
        return redirect('/');
    }
}
