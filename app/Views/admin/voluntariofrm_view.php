<?php
use Config\Services;
?>
<?= $this->extend('admin/dashboard_view') ?>
<?= $this->section('contenido') ?>

<div class="container-fluid">
    <!-- Ejemplo de tabla Listado -->
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Registrar Voluntario
            <button type="button" class="btn" onclick="location.href='<?= base_url('/admin/voluntario/frm');?>'">
                <i  class="far fa-plus-square">
                    &nbsp; Nuevo
                </i>
            </button>
        </div>
            <form id="frm-generico" action="/admin/voluntario/crear" method="POST" enctype="multipart/form-data" class="form-horizontal" autocomplete="off">
                <?php csrf_field()?>
                <input type="hidden" name="id" id="id" value="<?= isset($id) ? $id :''?>">
                <div>
                    <?php
                    $validation = \Config\Services::validation();
                    ?>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group col">
                            <label class="col-5 form-control-label" for="text-input">Nombre</label>
                            <div class="col-md-10">
                                <input type="text" id="nombre" name="nombre" value="<?= isset($nombre) ? $nombre :''?>" class="form-control" placeholder="Nombre">
                                <div>
                                    <h6><small><?= $validation->getError('nombre') ?></small></h6>
                                </div>
                            </div>
                            <label class="col-5 form-control-label" for="text-input">Apellido</label>
                            <div class="col-md-10">
                                <input type="text" id="apellido" name="apellido" value="<?= isset($apellido) ? $apellido : ''?>" class="form-control" placeholder="Apellido">
                                <div class="text-danger">
                                    <h6><small><?= $validation->getError('nombre') ?></small></h6>
                                </div>
                            </div>
                            <label class="col-5 form-control-label" for="text-input">Teléfono</label>
                            <div class="col-md-10">
                                <input type="number" id="telefono" name="telefono" value="<?= isset($telefono) ? $telefono : ''?>" class="form-control" placeholder="Teléfono">
                                <div class="text-danger">
                                    <h6><small><?= $validation->getError('telefono') ?></small></h6>
                                </div>
                            </div>
                            <div class="">
                                <label class="col-md-5 form-control-label" for="text-input">G. sanguineo</label>
                                <div class="col-md-10">
                                    <select name="tipoSanguineo" id="tipoSanguineo" value="<?= isset($tipoSanguineo) ? $tipoSanguineo : ''?>" class="form-control form-control-sm">
                                        <option value="a+">A+</option>
                                        <option value="a-">A-</option>
                                        <option value="b+">B+</option>
                                        <option value="b-">B-</option>
                                        <option value="ab+">AB+ (donante universal)</option>
                                        <option value="ab-">AB-</option>
                                        <option value="o+">O+</option>
                                        <option value="o-">O- (donante universal)</option>
                                    </select>
                                </div>
                                <label class="col-md-5 form-control-label" for="estado">Estado</label>
                                <div class="col-md-10">
                                    <select name="estado" id="estado" value="<?= isset($estado) ? $estado : ''?>" class="form-control form-control-sm">
                                        <option value="activo">Activo</option>
                                        <option value="inactivo">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group col">
                            <label class="col-md-5 form-control-label" for="text-input">Dirección</label>
                            <div class="col-md-10">
                                <input type="text" id="direccion" name="direccion" value="<?= isset($direccion) ? $direccion : ''?>" class="form-control" placeholder="Dirección">
                                <div class="text-danger">
                                    <h6><small><?= $validation->getError('direccion') ?></small></h6>
                                </div>
                            </div>
                            <label class="col-md-5 form-control-label" for="text-input">Cédula</label>
                            <div class="col-md-10">
                                <input type="number" id="cedula" name="cedula" value="<?= isset($cedula) ? $cedula : ''?>" class="form-control" placeholder="Cédula">
                                <div class="text-danger">
                                    <h6><sma><?= $validation->getError('cedula') ?></sma></h6>
                                </div>
                            </div>
                            <label for="texto-input" class="col-md-5 form-control-label">F. De Nacimiento</label>
                            <div class="col-md-10">
                                <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?= isset($fechaNacimiento) ? $fechaNacimiento : ''?>" class="form-control" placeholder="fecha de nacimiento">
                                <div class="text-danger">
                                    <h6><small><?= $validation->getError('fechaNacimiento') ?></small></h6>
                                </div>
                            </div>
                            <label class="col-md-5 form-control-label" for="text-input">Email</label>
                            <div class="col-md-10">
                                <input type="email" id="email" name="email" value="<?= isset($email) ? $email : ''?>" class="form-control" placeholder="Email">
                                <div class="text-danger">
                                    <h6><small><?= $validation->getError('email') ?></small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group col ">
                            <label class="col-md-5 form-control-label" for="foto">Foto</label>
                            <div class="col-md-5">
                                <img src="<?php echo base_url('uploads/perfil'); echo'/'; echo isset($foto)?$foto:'usuario.svg';?>" style="width:180px;height:180px;" class="rounded float-left">
                            </div>
                            <!--<label class="col-md-5 form-control-label" for="foto">Edad:<?php /* $date = new DateTime($fechaNacimiento); echo $anio=date('Y')-$date->format('Y');*/?></label>-->
                        </div>
                        <div class="col-md-10"><br>
                            <input type="file" accept="image/*"  id="foto" name="foto" value="<?= isset($foto) ? $foto : ''?>" placeholder="Foto">
                            <div class="text-danger">
                                <h6><small><?= $validation->getError('foto') ?></small></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="btnguardar">Guardar</button>
                    <a href="<?php echo base_url('/admin/voluntario/listado')?>" class="btn btn-danger" id="btnCancelar">Cancelar</a>
                </div>
            </form>



    </div>
    <!-- Fin ejemplo de tabla Listado -->
    <!--Inicio del modal agregar/actualizar-->
</div>
<?= $this->endSection() ?>
