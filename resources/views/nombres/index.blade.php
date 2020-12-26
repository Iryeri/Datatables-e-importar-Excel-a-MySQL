@extends('layouts.especial')
@extends('EstudiantesModal.modalEstudiantes')
@section('content')

    <head>
        @include('layouts.seccionesGenerales.cssDeTablas') <!--*-->
    </head>

    <body>
        @include('layouts.seccionesGenerales.css-jsDeModales') <!--*-->   

        <div class="container-fluid">  <!--*-->
            <div class="card"> <!--*-->
                <div class="card-header"><h4><b><center>Registro  de Estudiantes</center></b></h4></div>
                    <div class="card-body">
                                
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarEstudiante">Registrar</button>
                            </div>
                        </div>
                        <br>

                        <table class="table table-striped" id="dataTable" style="width:100%"> <!--*-->
                            <thead>
                                <tr>
                                    <th scope="col"><center>Identificador</center></th>
                                    <th scope="col"><center>Nombre</center></th>
                                    <th scope="col"><center>Apellido1</center></th>
                                    <th scope="col"><center>Apellido2</center></th>
                                    <th scope="col"><center>Papa</center></th>
                                    <th scope="col"><center>Mama</center></th>
                                    <th scope="col"><center>Hermano</center></th>
                                    <th scope="col"><center>Amigo</center></th>
                                    <th scope="col"><center>Amiga</center></th>
                                    <th scope="col"><center>Acción a realizar<center></th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th scope="col"><center>Identificador</center></th>
                                    <th scope="col"><center>Nombre</center></th>
                                    <th scope="col"><center>Apellido1</center></th>
                                    <th scope="col"><center>Apellido2</center></th>
                                    <th scope="col"><center>Papa</center></th>
                                    <th scope="col"><center>Mama</center></th>
                                    <th scope="col"><center>Hermano</center></th>
                                    <th scope="col"><center>Amigo</center></th>
                                    <th scope="col"><center>Amiga</center></th>
                                    <th scope="col"><center>Acción a realizar<center></th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach($nombres as $nombre)
                                <tr>
                                    <td><center>{{$nombre->id}}<center></td>
                                    <td><center>{{$nombre->nombre}}<center></td>
                                    <td><center>{{$nombre->apellido1}}<center></td>
                                    <td><center>{{$nombre->apellido2}}<center></td>
                                    <td><center>{{$nombre->papa}}<center></td>
                                    <td><center>{{$nombre->mama}}<center></td>
                                    <td><center>{{$nombre->hermano}}<center></td>
                                    <td><center>{{$nombre->amigo}}<center></td>
                                    <td><center>{{$nombre->amiga}}<center></td>
                                    <td><center>
                                        <a href="#" class="btn btn-success btnEditar">Editar</a>
                                        <a href="#" class="btn btn-danger btnEliminar">Eliminar</a>
                                        <center></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        <script src="{{ asset('js/transaccionesDeEstudiantes.js') }}?v=<?php echo(rand()); ?>"defer></script>  <!--*-->

                    </div>
                </div>
            </div>
            <br>
            <center><a href="/home" class="btn btn-dark">Ir al menú principal</a></center>
        </div> 

        @include('layouts.seccionesGenerales.jsDeTablas') <!--*-->

    </body>  
@endsection