
<?= $this->extend('admin/dashboard_view') ?>
<?= $this->section('contenido') ?>
<?php $session = \Config\Services::session();?>
    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card table-responsive-sm">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Detalle de Voluntarios
                <a href='<?php echo base_url('/admin/voluntario/frm');?>' class="btn">
                    <i  class="far fa-plus-square">
                        &nbsp; Nuevo
                    </i>
                </a>
            </div>
            <div class="card-body">
                <form id='fmr-Buscar' action="/admin/voluntario/buscar" method="GET" autocomplete="off">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <select class="custom-select col-md-4" id="type" name="type">
                                    <option value="nombre">Nombre</option>
                                    <option value="cedula">Cédula</option>
                                </select>
                                <input type="text" id="txtBuscar" name="txtBuscar" class="form-control" placeholder="Texto a buscar">
                                <button type="submit" class="btn btn-success" id="btnguardar">Buscar</button>
                            </div>
                        </div>
                        <div class="text-danger"><?php
                            $validation = \Config\Services::validation();
                            ?>
                            <h6><small><?= $validation->getError('texto') ?></small></h6>
                        </div>
                    </div>
                </form>
                <?= $session->getFlashdata("message") ?>
                <div class="">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Direccion</th>
                            <th>Teléfono</th>
                            <th>G. Sanguineo</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (isset($voluntario)):?>
                            <?php foreach ($voluntario as $voluntarios):?>
                                <tr>
                                    <td><?php echo $voluntarios['nombre'];?></td>
                                    <td><?php echo $voluntarios['apellido'];?></td>
                                    <td><?php echo $voluntarios['direccion'];?></td>
                                    <td><?php echo $voluntarios['telefono'];?></td>
                                    <td><?php echo $voluntarios['tipoSanguineo'];?></td>
                                    <td><?php echo $voluntarios['email'];?></td>
                                    <td>
                                        <a href="<?= base_url('/admin/voluntario/editar/'.$voluntarios['id']);?>"  class="btn btn-success btn-sm" id="editar" title="Editar">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a href="#" id="eliminarvoluntario" role="button" data-id="<?= $voluntarios['id']?>" title="eliminarvoluntario" class="btn btn-danger btn-sm">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        <a href="#" id="<?= $voluntarios['id']?>"  class="btn btn-info btn-sm" title="deshabilitar" id="deshabilitar">
                                            <i class="far fa-eye-slash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else:?>
                            <td colspan="7" align="center" class="alert alert-primary" role="alert">Actualmente no existen registros</td>
                        <?php endif;?>
                        </tbody>
                    </table>
                </div>
                <nav>
                    <ul class="pagination">
                        <?php $pager = \Config\Services::pager();?>
                        <?php echo $pager->links('default','default_bootstrap');?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<?= $this->endSection('') ?>