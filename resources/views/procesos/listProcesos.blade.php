@extends('admin.layouts.dashboard')

@section('page_heading','Listado de Procesos')

@section('section')
    
    <!-- /.row -->
    <div class="col-sm-12">

        <div class="row">
            <div class="col-sm-12">
                <a href="{{ url ('addProceso') }}">@include('admin.widgets.button', array('value'=>'Nuevo', 'class'=>'primary'))</a>
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Creado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($procesos as $proceso)
                                    <tr>
                                        <td>{{ $proceso->cod}}</td>
                                        <td>{{ $proceso->nombre}}</td>
                                        <td>{{ $proceso->descripcion}}</td>
                                        <td>{{ $proceso->created_at}}</td>
                                    </tr>
                                    
                                @endforeach



                                <tr class="success">
                                    <td>John</td>
                                    <td>john@gmail.com</td>
                                    <td>London, UK</td>
                                </tr>
                                <tr>
                                    <td>Wayne</td>
                                    <td>wayne@gmail.com</td>
                                    <td>Manchester, UK</td>
                                </tr>
                                <tr class="info">
                                    <td>Andy</td>
                                    <td>andy@gmail.com</td>
                                    <td>Merseyside, UK</td>
                                </tr>
                                <tr>
                                    <td>Danny</td>
                                    <td>danny@gmail.com</td>
                                    <td>Middlesborough, UK</td>
                                </tr>
                                <tr class="warning">
                                    <td>Frank</td>
                                    <td>frank@gmail.com</td>
                                    <td>Southampton, UK</td>
                                </tr>
                                <tr>
                                    <td>Scott</td>
                                    <td>scott@gmail.com</td>
                                    <td>Newcastle, UK</td>
                                </tr>
                                <tr class="danger">
                                    <td>Rickie</td>
                                    <td>rickie@gmail.com</td>
                                    <td>Burnley, UK</td>
                                </tr>
                            </tbody>
                        </table>
                    @endslot
                @endcomponent
            </div>
            <!-- /.col-sm-6 -->
        </div>
        
    </div>
    <!-- /.col-sm-12 -->

@endsection