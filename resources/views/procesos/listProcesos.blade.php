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
                                                        <a href="#"><i class="fa fa-edit fa-fw"></i>Editar</a>
                                                    </li>
                                                    <li>
                                                         <a href="#"><i class="fa fa-trash-o fa-fw"></i> Eliminar</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>{{$proceso->nombre}}</td>
                                        <td>{{$proceso->descripcion}}</td>
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