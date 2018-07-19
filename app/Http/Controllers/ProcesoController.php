<?php

namespace App\Http\Controllers;
use App\Proceso;
use App\Role;
use App\Role_User;
use App\Participante;
use App\User;

use Illuminate\Http\Request;

class ProcesoController extends Controller
{
    //
    public function listProcesos(){
    	$procesos = Proceso::all();
    	return view('procesos.listProcesos')->with(['procesos' => $procesos]);
    }
//llamadas a edicion GET
    public function addProceso(){
    	$proceso = new Proceso;
    	return view('procesos.addProceso')->with(['proceso'=>$proceso]);
    }

    public function editProceso(Proceso $proceso)
    {
    	return view('procesos.editProceso')->with(['proceso'=>$proceso]);
    }
    public function editFormProceso(Proceso $proceso)
    {
        return view('procesos.editFormProceso')->with(['proceso'=>$proceso]);
    }

    public function editPeopleProceso(Proceso $proceso)
    {
        $roles = Role::all();
        $users =  User::all();
        $participante = new Participante;
        return view('procesos.editPeopleProceso')->with(['proceso'=>$proceso,'roles'=>$roles,'users'=>$users,'participante'=>$participante]);
    }

//POST     	
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
    //realizar los formrequest luego para la validacion y la autorizacion
        $this->validate($request,[
            'nombre' =>'required',
            'cod' =>'required',
            'descripcion' => 'required'
        ]);

    	$proceso->update(
    		$request->all()
    	);
    	return redirect()->route('listProcesos');
    }
    public function saveParticipante(Request $request)
    { 
        $users =  User::all();
        dd($request->all());
        foreach ($users as $user) {
            $seleccion = "seleccion-".strval($user->id);
            
            // if ($request->input($seleccion)) {
            //     $participante = new Participante;
            //     $participante->proceso_id = $request->input($request->input("proceso_id-".strval($user->id)));
            //     $participante->participante_id = $request->input($request->input("participante_id-".strval($user->id))); 
            //     $participante->participante_type = $request->input($request->input("participante_type-".strval($user->id)));
            //     if ($request->input("esIniciador-".strval($user->id))) {
            //         $participante->esIniciador = TRUE ; 
            //     }else {
            //         $participante->esIniciador = FALSE ;
            //     } 
            //     if ($request->input("esFinalizador-".strval($user->id))) {
            //         $participante->esFinalizador = TRUE;
            //     }else {
            //         $participante->esFinalizador = FALSE;
            //     }
            //     $participante->save();
            // }
        }
        return redirect()->route('listProcesos');
    }
     
}
