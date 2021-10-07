<?= $this->extend('admin/dashboard_view') ?>
<?= $this->section('contenido') ?>

    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Crear Noticia
                <button type="button" class="btn" onclick="location.href='<?= base_url('/admin/blog/nuevo');?>'">
                    <i class="far fa-plus-square">
                        &nbsp; Nuevo
                    </i>
                </button>
            </div>

            <div class="card-body">
                <form id="frm-generico" action="/admin/blog/crear" method="GET" autocomplete="off"  class="form-horizontal">
                    <input type="hidden" name="id" id="id" value="<?= isset($id) ? $id :''?>">
                    <?php csrf_field()?>
                    <div>
                        <?php
                        $validation = \Config\Services::validation();
                        if ($validation)
                        {

                            echo "<div class='text-danger'>".$validation->listErrors()."</div>";
                        }
                        ?>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 form-control-label"
                               for="text-input">Título</label>
                        <div class="col-md-9">
                            <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título de noticia"  value="<?= isset($titulo) ? $titulo : ''?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 form-control-label" for="text-input">Contenido
                        </label>
                        <div class="col-md-9">
                            <textarea name="contenido" id="summernote"><?= isset($contenido) ? $contenido : ""?></textarea>
                            <br>
                            <button type="submit" class="btn btn-success" id="btnguardar">Guardar</button>
                            <a href="<?php echo base_url('/admin/blog/listado')?>" class="btn btn-danger" id="btnCancelar">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Fin ejemplo de tabla Listado -->
        <!--Inicio del modal agregar/actualizar-->
    </div>
<?= $this->endSection() ?>