@extends('admin.layouts.dashboard')

@section('page_heading','Nuevo Proceso')

@section('section')
<link rel="stylesheet" href="{{ asset('css/formBuilderConfig.css') }}"> 
<!--  -->
<div class="col-md-12">
    <!--  -->
    <form action="{{ route('saveProceso') }}" method="POST">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="form-group">
                    <label for="nombre" >Nombre</label>
                    <input name="nombre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cod" >Codigo</label>
                    <input name="cod" class="form-control">
                    <p class="help-block">Maximo 5 caracteres Minimo 3 caracteres</p>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" class="form-control" rows="4" placeholder="Ingrese una descripcion detallada del proceso"></textarea>               
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success"></input>
                     <input type="reset" class="btn btn-warning"></input>
                 </div>
            </div>
        </div>       
    </form>
</div>
@endsection