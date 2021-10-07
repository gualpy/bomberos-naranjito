<?php

use Config\Services;

?>
<?= $this->extend('admin/dashboard_view') ?>
<?= $this->section('contenido') ?>

    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Noticias
                <button type="button" class="btn" onclick="location.href='<?= base_url('/admin/blog/nuevo');?>'">
                    <i  class="far fa-plus-square">
                        &nbsp; Nuevo
                    </i>
                </button>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped w-auto table-sm">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Contenido</th>
                            <th>Fecha - Hora</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?= Services::validation()->listErrors(); ?>
                    <?php if (isset($noticia)):?>
                        <?php foreach ($noticia as $noticias):?>
                            <tr id="trid">
                                <td><?= substr($noticias['titulo'],0,45)."...";?></td>
                                <td><?= substr(strip_tags($noticias['contenido']),0,40);?>
                                </td>
                                <td><?=  $noticias['created_at'];?></td>
                                <td>
                                    <a href="<?= base_url('/admin/blog/editar/'.$noticias['id']);?>"  class="btn btn-success btn-sm" id="editar" title="Editar">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" id="eliminar" role="button" data-id="<?= $noticias['id']?>" title="Eliminar" class="btn btn-danger btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                    <a href="#" id="<?= $noticias['id']?>"  class="btn btn-info btn-sm" title="deshabilitar" id="deshabilitar">
                                        <i class="far fa-eye-slash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else:?>
                        <td colspan="4" align="center" class="alert alert-primary" role="alert">Actualmente no existen registros</td>
                    <?php endif;?>
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination">
                        <?php echo $pager->links('default','default_bootstrap');?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<?= $this->endSection('') ?>