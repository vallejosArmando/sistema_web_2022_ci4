<?= $this->extend('layouts/frontend6.php'); ?>


<?= $this->section('card') ?>

<div id="formulario">
   <form action="<?php echo base_url('agregar_sistema') ?>" id="formulario_sistema" name="formulario_sistema" method="POST" enctype="multipart/form-data" class="form">
      <div class="titulo">
         <p> <?= $titulo ?></p>
      </div>
      <div class="tit">
      </div>
      <div class="inputss">



         <label for="nombre" class="label"><span class="span">*</span>Nombre del Sistema</label>
         <input type="text" name="nombre" class="input" id="nombre">

         <label for="nombre_creador" class="label"><span class="span">*</span>Nombre del creador</label>
         <input type="text" name="nombre_creador" class="input" id="nombre_creador">

         <label for="icono" class="label"><span class="span">*</span>Icono</label>
         <input type="file" name="icono" class="input" id="icono">


      </div>
      <span class="span">(*)Datos obligatorios</span>

      <div class="botones">
         <button type="button" class="b1" onclick="validar()">Agregar</button>
         <a href="<?php echo base_url('menu') ?>" class="b2">Cancelar</a>
      </div>
   </form>
</div>

<?= $this->endSection() ?>


<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_sistema.js"></script>
<?= $this->endSection(); ?>