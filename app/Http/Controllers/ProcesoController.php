<?php

namespace App\Http\Controllers;
use App\Proceso;

use Illuminate\Http\Request;

class ProcesoController extends Controller
{
    //
    public function listProcesos(){
    	$procesos = Proceso::all();
    	return view('procesos.listProcesos')->with(['procesos' => $procesos]);
    }

    public function addProceso(){
    	$proceso = new Proceso;
    	return view('procesos.addProceso')->with(['proceso'=>$proceso]);
    }

    public function editProceso(Proceso $proceso)
    {
    	return view('procesos.editProceso')->with(['proceso'=>$proceso]);
    }
    	
    public function deleteProceso(Proceso $proceso){
    	$proceso->delete();
    	return redirect()->route('listProcesos');
    }
    public function saveProceso(Request $request)
    {
    	//realizar los formrequest luego para la validacion y la autorizacion
    	$this->validate($request,[
    		'nombre' =>'required',
    		'cod' =>'required',
    		'descripcion' => 'required'
    	]);
    	
    	$proceso = Proceso::create($request->all());
    	return redirect()->route('listProcesos');
    }
    public function updateProceso(Proceso $proceso,Request $request){
    	$proceso->update(
    		$request->all()
    	);
    	return redirect()->route('listProcesos');
    }
     public function editFormProceso(Proceso $proceso)
    {
    	return view('procesos.editFormProceso')->with(['proceso'=>$proceso]);
    }
}
