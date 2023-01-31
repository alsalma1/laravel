<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //Crear un nuevo registro
    public function create(Request $request){
        $admin = new Admin();
        if (isset($_POST['send'])){
            $user_name = $admin->user_name = $_POST['email'];
            //Si existe la clave primaria
            if (Admin::where('user_name', $user_name )->exists()) {
                echo "ya existe";
            }
            else{
                $user_name = $admin->user_name = $_POST['email'];
                $admin->passwd = $_POST['passwd'];
                $admin;
                $admin->save();
                echo "no existe";
            }
        }
    }
}
