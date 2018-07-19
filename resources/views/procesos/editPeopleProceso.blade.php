@extends('admin.layouts.dashboard')
 
@section('page_heading','Participantes')

@section('section')

 <div class="col-md-12">
     @include('procesos._formParticipantes',['proceso'=>$proceso,'users'=>$users,'participante'=>$participante])
 </div>
    
@endsection
@section('jsScripts')
	<script src="{{ asset("js/jquery-ui.min.js") }}"></script>
@endsection