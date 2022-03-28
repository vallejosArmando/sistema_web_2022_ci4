<?= $this->extend('layouts/frontend6.php'); ?>


<?= $this->section('card') ?>

<div id="formulario">
 <form action="<?php echo base_url('') ?>" id="form_rol" name="form_rol" method="POST" enctype="multipart/form-data" class="form">
  <div class="titulo">
 <p><?= $titulo ?></p>
  </div>
  <div class="tit">
  </div>
  <div class="inputss">
   <label class="label" for="rol">*Rol</label>
   <input type="text" name="rol" class="input" id="rol">
  </div>
   <div class="botones">
    <button type="button" class="b1" onclick="validar();" >Agregar</button>
    <a href="<?php echo base_url('menu');?>" class="b2">Cancelar</a>

   </div>
 </form>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_rol.js"></script>
<script>
 $(document).ready(function() {
  $(".select2").select2({

  });

 });
</script>
<?= $this->endSection(); ?>