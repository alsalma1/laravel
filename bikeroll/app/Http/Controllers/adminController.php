<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //Crear un nuevo registro
    public function create(){
        $admin = new Admin();
        $user_name = $admin->user_name = 'admin1';
        //Si existe la clave primaria
        if (Admin::where('user_name', $user_name )->exists()) {
            echo "ya existe";
        }
        else{
            $user_name = $admin->user_name = 'admin1';
            $admin->passwd = 'a';
            $admin;
            $admin->save();
            echo "no existe";
        }
    }
}
