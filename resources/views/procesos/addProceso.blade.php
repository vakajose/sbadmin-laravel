@extends('admin.layouts.dashboard')

@section('page_heading','Nuevo Proceso')

@section('section')
<link rel="stylesheet" href="{{ asset('css/formBuilderConfig.css') }}"> 
 
<div class="col-md-12">
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <label for="ex" >Nombre</label>
            <input id="ex" class="form-control">

            <label for="tx">Descripcion</label>
            <textarea id="tx" class="form-control" rows="3"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <h3>Diseñe el formulario</h3>
            <div id="formEditor"></div>  
            <div id="formRender">
                <form action="#"></form>
                <button class="btn btn-primary edit-form">Editar</button>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6">
            <h3>Diseñe el Flujo</h3>
            <div class="build-wrap"></div>   
        </div>
         
    </div>
    
</div>
    

@endsection