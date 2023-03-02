<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Race;

class principalPageController extends Controller
{
    public function __invoke(){
        $races = Race::where('state',1)->get();
        return view('paginaPrincipal' , [
            'races' => $races
        ]);
    }

    public function show(){
        $races = Race::where('state',1)->get();
        return view('paginaPrincipal' , [
            'races' => $races
        ]);
    }

    public function showPrincipalPage(){
        return view('admin.paginaPrincipal');
    }

}