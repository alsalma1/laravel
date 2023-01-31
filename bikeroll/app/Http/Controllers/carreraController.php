<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carreraController extends Controller
{
    public function addRace(){
        return view('admin.carreras.anyadirCarrera');
        // if ($_POST['send']{

        // })
    }


    public function editRace(){
        return view('admin.carreras.editarCarrera');

    }

    public function deleteRace(){
        return view('admin.carreras.desactivarCarrera');

    }
}
