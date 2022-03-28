<?= $this->extend('layouts/frontend6.php'); ?>


<?= $this->section('card') ?>

<div id="formulario">
        <form action="<?php echo base_url(''); ?>" id="form_opcion" name="form_opcion"method="POST" enctype="multipart/form-data" class="form">
                <div class="titulo">
<p><?= $titulo ?></p>
                </div>
                <div class="tit">
                </div>
                <div class="inputss">

                        <label class="label">*Grupo</label>

                        <select class=" select2" name="id_grupo" id="id_grupo" style="width: 100%;">
                                <option selected="selected" placeholder="Ingrese grupo"></option>
                               

                                        <option value="1">Herramientas</option>
                                        <option value="2">Sistema</option>
                               

                        </select>
                        <label class="label">*Rol</label>


                        <select class=" select2" name="id_rol" id="id_rol" style="width: 100%;">
                                <option selected="selected" placeholder="Ingrese rol"></option>
                             

                                        <option value="1">Super</option>
                                        <option value="2">Demo</option>
                               

                        </select>

                        <label for="nombre" class="label">*Nombre</label>
                        <input type="text" name="nombre" class="input" id="nombre">

                        <label for="nombre" class="label">*URL</label>
                        <input type="text" name="op_url" class="input" id="op_url" placeholder="Ingrese ">

                        <label for="mostrar" class="label">*Mostrar</label>

                        <select class=" select2" name="mostrar" id="mostrar" style="width: 100%;">
                                <option selected="selected" placeholder="mostrar "></option>

                                <option value="si">si</option>
                                <option value="no">no</option>



                        </select>
                        <label for="orden" class="label">*Orden</label>
                        <input type="text" name="orden" class="input" id="orden">

                </div>

                <div class="botones">

                        <button type="button" class="b1" onclick="validar()" >Agregar</button>
                        <a href="<?php echo base_url('menu');?>" class="b2">Cancelar</a>
                </div>
        </form>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_opcion.js"></script>
<script>
        $(document).ready(function() {
                $(".select2").select2({

                });
           
        });
</script>
<?= $this->endSection(); ?>