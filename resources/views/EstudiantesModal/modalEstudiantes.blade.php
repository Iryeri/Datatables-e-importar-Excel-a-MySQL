<link rel="stylesheet" type="text/css" href="css/modal.css">


<!--TAMAÑOS
modal-dialog modal-xl
modal-dialog modal-lg
modal-dialog modal-sm
SCROLL
modal-dialog modal-dialog-scrollable
-->



<!--MODALS-->
    <!-- MODAL AGREGAR-->
    <div class="modal fade" id="agregarEstudiante" tabindex="-1" aria-labelledby="labelAgregarEstudiante" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregarEstudiante">Nuevo Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="agregarForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <label for="nombre"><b>nombre</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el nombre" name="nombre"/>
                                <br> </br>
                                <label for="apellido1"><b>Apellido</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el apellido" name="apellido1"/>
                                <br> </br>
                                <label for="apellido2"><b>apellido2</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el apellido2" name="apellido2"/>
                                <br> </br>
                                <label for="papa"><b>papa</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el papa" name="papa"/>
                                <br> </br>
                                <label for="mama"><b>mama</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el mama" name="mama"/>
                                <br> </br>
                                <label for="hermano"><b>hermano</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el hermano" name="hermano"/>
                                <br> </br>
                                <label for="amigo"><b>amigo</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el amigo" name="amigo"/>
                                <br> </br>
                                <label for="amiga"><b>amiga</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el amiga" name="amiga"/>
                                <br> </br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Registrar Estudiante</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL AGREGAR-->




    <!-- MODAL EDITAR-->
        <div class="modal fade" id="editarEstudiante" tabindex="-1" aria-labelledby="labelEditarEstudiante" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title col-11 text-center" id="labelEditarEstudiante">Editar Registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="editarForm">
                            <div class="modal-body">
                                {{ csrf_field() }}
                                {{method_field('PUT')}}
                                <div class="form-row">
                                    <input type="text" name="id" id="idEditar">
                                    <label for="nombre1"><b>nombre1</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el nombre1" id="nombre1" name="nombre1"/>
                                <br> </br>
                                <label for="apellido11"><b>Apellido</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el apellido" id="apellido11" name="apellido11"/>
                                <br> </br>
                                <label for="apellido21"><b>apellido21</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el apellido21" id="apellido21" name="apellido21"/>
                                <br> </br>
                                <label for="papa1"><b>papa</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el papa" id="papa1" name="papa1"/>
                                <br> </br>
                                <label for="mama1"><b>mama</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el mama1" id="mama1" name="mama1"/>
                                <br> </br>
                                <label for="hermano1"><b>hermano</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el hermano" id="hermano1" name="hermano1"/>
                                <br> </br>
                                <label for="amigo1"><b>amigo</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el amigo" id="amigo1" name="amigo1"/>
                                <br> </br>
                                <label for="amiga1"><b>amiga</b></label>
                                <input type="text" class="form-control" placeholder="Escriba el amiga" id="amiga1" name="amiga1"/>
                                <br> </br>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-success">Actualizar registro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <!--FIN MODAL EDITAR-->


    <!-- MODAL ELIMINAR-->
        <div class="modal fade" id="eliminarEstudiante" tabindex="-1" aria-labelledby="labelEliminarEstudiante" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title col-11 text-center" id="labelEliminarEstudiante">Eliminar Registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="eliminarForm">
                            <div class="modal-body">
                                {{ csrf_field() }}
                                {{method_field('DELETE')}}
                                <div class="form-row">
                                    <input type="hidden" name="id" id="idEliminar">
                                    <label for="nombre"><b>Nombre</b></label>
                                    <input type="text" class="form-control" name="nombre3" readonly="nombre3" id="nombre3"/>
                                    <br> </br>
                                    <label for="apellido"><b>Apellido</b></label>
                                    <input type="text" class="form-control" name="apellido3" readonly="apellido3" id="apellido3"/>
                                    <p>
                                        ¿Está seguro que desea eliminar este registro?
                                    </p>
                                </div>

                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-secondary">Eliminar registro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <!--FIN MODAL ELIMINAR-->