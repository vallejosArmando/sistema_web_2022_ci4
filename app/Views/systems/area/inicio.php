<?= $this->extend('layouts/frontend6.php') ?>
<?= $this->section('card') ?>
<div class="formulario">


  <form action="<?php echo base_url('agregar_area') ?>" id="form_area" name="form_area" method="POST" enctype="multipart/form-data" class="form">
    <div class="titulo">
      <p> <?= $titulo ?></p>
    </div>
    <div class="tit">
    </div>
    <div class="inputss">

      <label class="label" for="nombre"><span class="span">*</span>Nombre</label>
      <input type="text" name="nombre" class="input" id="nombre">

      <label class="label" for="descripcion"><span class="span">*</span>Descripcion</label>
      <input type="text" name="descripcion" class="input" id="descripcion">
      <span class="span">(*)Datos obligatorios</span>

      <div class="botones">
        <button type="button" class="b1" onclick="validar()">Agregar</button>
        <a href="<?php echo base_url('menu') ?>" class="b2">Cancelar</a>
      </div>
  </form>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_area.js"></script>

<?= $this->endSection(); ?>