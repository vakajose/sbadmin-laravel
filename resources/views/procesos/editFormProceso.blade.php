@extends('admin.layouts.dashboard')
 
@section('page_heading','Edicion de formulario')

@section('section')

<link rel="stylesheet" href="{{asset('css/formBuilderConfig.css')}}">

<div class="col-md-12">
   		<h3 class="nombre-proceso">{{$proceso->cod}}: {{$proceso->nombre}}</h3>
    	<div id="formEditor"></div>  
    	<div id="formRender">
        <script>
                var proce = '{{$proceso}}';
                //console.log(proce);
        </script>
    		<form action="#"></form>
    		<button class="btn btn-primary edit-form">Editar</button>
    		<button id="grabarJSON" class="btn btn-success edit-form">Grabar</button>
    	</div>
    
</div>

@endsection
@section('jsScripts')
	<script src="{{ asset("js/jquery-ui.min.js") }}"></script>
	<script src="{{ asset("js/form-builder.min.js") }}"></script>
	<script src="{{ asset("js/form-render.min.js") }}"></script>
	<script src="{{ asset("js/formBuilderConfig.js") }}"></script>
@endsection