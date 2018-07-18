@extends('admin.layouts.dashboard')
 
@section('page_heading','Actualizar proceso')

@section('section')

<div class="col-md-12">
    @include('procesos._form',['proceso'=>$proceso])
</div>
@endsection