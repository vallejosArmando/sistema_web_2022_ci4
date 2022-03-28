<?= $this->extend('layouts/frontend6.php') ?>
<?= $this->section('card') ?>
<div id="formulario">
  <form action="<?php echo base_url('agregar_tipo'); ?>" id="form_tipo" name="form_tipo" method="POST" enctype="multipart/form-data" class="form">
    <div class="titulo">
      <p><?= $titulo ?> </p>
    </div>
    <div class="tit">
    </div>
    <div class="inputss">


      <label class="label" for="tipo"><span class="span">*</span>Tipo</label>
      <input type="text" name="tipo" class="input" id="tipo">

      <label class="label" for="descripcion"><span class="span">*</span>Descripcion</label>
      <input type="text" name="descripcion" class="input" id="descripcion">
    </div>

    <span class="span">(*)Datos obligatorios</span>

    <div class="botones">
      <button type="button" class="b1" onclick="validar();">Agregar</button>
      <a href="<?php echo base_url('menu') ?>" class="b2">Cancelar</a>

    </div>
  </form>
</div>
<?= $this->endSection() ?>


<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_tipo.js"></script>
<?= $this->endSection(); ?>