@extends('admin.layouts.dashboard')

@section('page_heading','Listado de Procesos')

@section('section')
    
    <!-- /.row -->
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-12">
                 <a href="{{ route ('addProceso') }}">@include('admin.widgets.button', array('value'=>'Nuevo', 'class'=>'primary'))</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($procesos as $proceso)
                                    <tr>
                                        <td>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-caret-down"></i> {{$proceso->cod}}</a>
                                                <ul class="dropdown-menu dropdown-user">
                                                    <li>
                                                        <a href="{{ route('editProceso',['proceso'=>$proceso->id]) }}"><i class="fa fa-edit fa-fw"></i>Editar Parametros</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('editFormProceso',['proceso'=>$proceso->id]) }}"><i class="fa fa-file-text fa-fw"></i>Editar Formulario</a>            
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('editPeopleProceso',['proceso'=>$proceso->id]) }}"><i class="fa fa-group fa-fw"></i>Participantes</a>            
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-rocket fa-fw"></i>Flujo</a>            
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>{{$proceso->nombre}}</td>
                                        <td>{{$proceso->descripcion}}</td>
                                        <td>
                                            <form action="{{ route('deleteProceso',['proceso'=>$proceso->id])}}" method="POST">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}

                                                    <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-trash-o fa-fw"></i>Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endslot
                @endcomponent
            </div>
            <!-- /.col-sm-12 -->
        </div>
        <!-- row -->
    </div>
    <!-- /.col-sm-12 -->
@endsection