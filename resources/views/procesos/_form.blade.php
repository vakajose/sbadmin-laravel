@if ($proceso->exists)
    <form action="{{ route('updateProceso',['proceso'=>$proceso->id])}}" method="POST">
        {{method_field('PUT')}}
@else
    <form action="{{ route('saveProceso') }}" method="POST">
@endif
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="form-group">
                    <label for="nombre" >Nombre</label>
                    <input name="nombre" class="form-control" value="{{$proceso->nombre or old('nombre')}}">
                </div>
                <div class="form-group">
                    <label for="cod" >Codigo</label>
                    <input name="cod" class="form-control" value="{{$proceso->cod or old('cod')}}">
                    <p class="help-block">Maximo 5 caracteres Minimo 3 caracteres</p>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" class="form-control" rows="4" placeholder="Ingrese una descripcion detallada del proceso" value="{{$proceso->descripcion or old('descripcion')}}"></textarea>               
                </div>
                <div class="form-group pull-right">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save fa-fw"></i>Guardar</button>
                     <button type="reset" class="btn btn-warning"><i class="fa fa-repeat fa-fw"></i>Limpiar</button>
                 </div>
            </div> 
        </div>       
 </form>