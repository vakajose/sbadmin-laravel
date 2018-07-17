<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcesoController extends Controller
{
    //
    public function listProcesos()
    {
    	return view('procesos.listProcesos');
    }

    public function addProceso(){
    	return view('procesos.addProceso');
    }
}
