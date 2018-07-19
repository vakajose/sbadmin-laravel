
        <h3 class="nombre-proceso">{{$proceso->cod}}: {{$proceso->nombre}}</h3>    
 
{{-- 
    <div class="col-md-12">
        <label>Seleccione Rol</label>
        <select class="form-control">
            @foreach ($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>
     --}}
@if ($participante->exists)
    <form action="{{ route('updateParticipante',['proceso'=>$proceso->id])}}" method="POST">
        {{method_field('PUT')}}
@else
    <form action="{{route('saveParticipante')}}" method="POST">
@endif
         {{csrf_field()}}

    <div class="col-sm-12">
        @component('admin.widgets.panel')
            @slot('panelTitle','Selecione participantes')
            @slot('panelBody')
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Usuario</th>
                            <th>Iniciador</th>
                            <th>Finalizador</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            {{-- <div id="id{{$user->id}}" class="form-group">
                                <input type="hidden" id="{{$proceso->cod}}" name="{{$proceso->nombre}}" value="{{$proceso->id}}">
                            </div> --}}
                            <tr id="id-{{$user->id}}">
                                <td>
                                    <input type="hidden" name="seleccion-{{$user->id}}" value="0">
                                    <input name="seleccion-{{$user->id}}" type="checkbox" value="1">
                                </td>
                                <input type="hidden" name="proceso_id-{{$user->id}}" value="{{$proceso->id}}">
                                <input type="hidden" name="participante_id-{{$user->id}}" value="{{$user->id}}">
                                <input type="hidden" name="participante_type-{{$user->id}}" value="usr">
                                <td> {{$user->name}}</td>
                                <td>  
                                    <input type="hidden" name="esIniciador-{{$user->id}}" value="0">
                                    <input name="esIniciador-{{$user->id}}" type="checkbox" value="1"></td>
                                <td>  
                                    <input type="hidden" name="esFinalizador-{{$user->id}}" value="0">
                                    <input name="esFinalizador-{{$user->id}}" type="checkbox" value="1">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endslot
            @slot('panelFooter')
            <button type="submit" class="btn btn-success">Guardar</button>
            @endslot
        @endcomponent       
    </div>    
    
   </form>