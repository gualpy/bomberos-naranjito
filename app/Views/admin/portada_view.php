<?= $this->extend('admin/dashboard_view') ?>
<?= $this->section('contenido') ?>
<div class="container-fluid">
                            <!-- Ejemplo de tabla Listado -->
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Ley de Transparencia
                                    <button type="button" class="btn" data-toggle="modal"
                                        data-target="#modalNuevo">
                                        <i class="far fa-plus-square"></i>&nbsp;Nuevo
                                    </button>
                                </div>
                                <div class="card-body">
                                    <!-- <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <select class="form-control col-md-3" id="opcion" name="opcion">
                                                    <option value="nombre">Nombre</option>
                                                    <option value="descripcion">Descripción</option>
                                                </select>
                                                <input type="text" id="texto" name="texto" class="form-control"
                                                    placeholder="Texto a buscar">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fa fa-search"></i> Buscar</button>
                                            </div>
                                        </div>
                                    </div> -->
                                    <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Fecha</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Nombre1
                                                </td>
                                                <td>Equipos</td>
                                                <td>Dispositivos electrónicos</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo" title="Cambiar PDF">
                                                    <i class="fas fa-recycle"></i>
                                                    </button> &nbsp;
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalEliminar" title="deshabilitar">
                                                    <i class="far fa-eye-slash"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar" title="Eliminar">
                                                    <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Nombre2
                                                </td>
                                                <td>Equipos</td>
                                                <td>Dispositivos electrónicos</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo" title="Cambiar PDF">
                                                    <i class="fas fa-recycle"></i>
                                                    </button> &nbsp;
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalEliminar" title="deshabilitar">
                                                    <i class="far fa-eye-slash"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar" title="Eliminar">
                                                    <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Nombre3
                                                </td>
                                                <td>Equipos</td>
                                                <td>Dispositivos electrónicos</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo" title="Cambiar PDF">
                                                    <i class="fas fa-recycle"></i>
                                                    </button> &nbsp;
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalEliminar" title="deshabilitar"><i class="far fa-eye-slash"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar" title="Eliminar">
                                                    <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#">Ant</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Sig</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Fin ejemplo de tabla Listado -->
                            <!--Inicio del modal agregar/actualizar-->
                            <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-primary modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Agregar categoría</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post" enctype="multipart/form-data"
                                                class="form-horizontal">
                                                <div class="form-group row">
                                                    <label class="col-md-3 form-control-label"
                                                        for="text-input">Nombre</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="nombre" name="nombre"
                                                            class="form-control" placeholder="Nombre de categoría">
                                                        <span class="help-block">(*) Ingrese el nombre de la
                                                            categoría</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 form-control-label"
                                                        for="email-input">Descripción</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="descripcion" name="descripcion"
                                                            class="form-control" placeholder="Enter Email">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!--Fin del modal-->
                        </div>
<?= $this->endSection('') ?>