<?= $this->extend('layouts/frontend6.php'); ?>


<?= $this->section('card') ?>

<div id="formulario">
 <form action="<?php echo base_url('') ?>" id="form_usuario" name="form_usuario" method="POST" enctype="multipart/form-data" class="form">
  <div class="titulo">
   <p><?= $titulo ?></p>
  </div>
  <div class="tit">
  </div>
  <div class="inputss">
   <label class="label" for="nom_usuario">*Usuario</label>
   <input type="text" name="nom_usuario" class="input" id="nom_usuario">
   <label class="label" for="clave">*clave</label>
   <input type="text" name="clave" class="input" id="clave">
   <label class="label" for="id_persona">*Persona</label>
   <input type="text" name="id_persona" class="input" id="id_persona">
  </div>
  <div class="botones">
   <button type="button" class="b1" onclick="validar();">Agregar</button>
   <a href="<?php echo base_url('menu');?>" class="b2">Cancelar</a>

  </div>
 </form>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_usuario.js"></script>
<script>
 $(document).ready(function() {
  $(".select2").select2({

  });

 });
</script>
<?= $this->endSection(); ?>