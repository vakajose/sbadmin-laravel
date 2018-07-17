<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proceso;

class ProcesoController extends Controller
{
    //
    public function listProcesos()
    {
    	$procesos = Proceso::all();
    	dd($procesos);
    	return view('procesos.listProcesos')->with(['procesos' => $procesos]);
    }

    public function addProceso(){
    	return view('procesos.addProceso');
    }
}
