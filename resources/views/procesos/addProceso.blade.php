@extends('admin.layouts.dashboard')

@section('page_heading','Crear Proceso')

@section('section')
<link rel="stylesheet" href="{{ asset('css/formBuilderConfig.css') }}"> 
<!--  -->
<div class="col-md-12">
    @include('procesos._form',['proceso'=>$proceso])
</div>
@endsection