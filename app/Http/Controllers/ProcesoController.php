<?php

namespace App\Http\Controllers;
use App\Proceso;

use Illuminate\Http\Request;

class ProcesoController extends Controller
{
    //
    public function listProcesos(){
    	$procesos = Proceso::all();
    	dd($procesos);
    	return view('procesos.listProcesos')->with(['procesos' => $procesos]);
    }

    public function addProceso(){
    	return view('procesos.addProceso');
    }

    public function updateProceso($id)
    {
    	
    }
    public function deleteProceso(){

    }
    public function saveProceso(Request $request)
    {
    	
    }
}
