<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class principalPageController extends Controller
{
    public function __invoke(){
        return view('admin.paginaPrincipal');
    }
}
