<?= $this->extend('layouts/frontend6.php') ?>
<?= $this->section('card') ?>
<div id="formulario">
 <form action="<?php echo base_url('agregrar_jefe_area') ?>" id="form_jefe_area" name="form_jefe_area" method="POST" enctype="multipart/form-data" class="form">
  <div class="titulo">

   <p> <?= $titulo ?> </p>
  </div>
  <div class="tit">


  </div>
  <div class="inputss">
   <div class="desplegar_bloques">
    <div class="bloque1">




     <label class="label" for=" nombres"><span class="span">*</span>Nombre</label>
     <input type="text" name="nombres" class="input" id="nombres" value="">


     <label class="label" for=" am"><span class="span">*</span>Apellido Materno</label>
     <input type="text" name="am" class="input" id="am" value="">
     <label class="label" for=" telefono"><span class="span">*</span>Telefono </label>
     <input type="text" name="telefono" class="input" id="telefono">

     <label class="label" for=" fec_inicio"><span class="span">*</span>Fecha de inicio</label>
     <input type="date" name="fec_inicio" class="input" id="fec_inicio">



    </div>
   </div>

   <div class="desplegar_bloques">
    <div class="bloque2">


     <label class="label" for=" ap"><span class="span">*</span>Apellido Paterno</label>
     <input type="text" name="ap" class="input" id="ap">
     <label for=" nombre"><span class="span">*</span>Cedula</label>
     <input type="text" name="ci" class="input" id="ci">

     <label class="label" for=" correo"><span class="span">*</span>Correo</label>
     <input type="email" name="correo" class="input" id="correo">

     <label class="label" for=" fec_fin"><span class="span">*</span>Fecha fin</label>
     <input type="date" name="fec_fin" class="input" id="fec_fin">
     <label class="label"><span class="span">*</span>Area</label>

     <select class="select2 " name="area" id="area" style="width: 100%;">
      <option selected="selected"></option>



      <option value="Mantenimiento">Mantenimiento</option>
      <option value="Comercial">Comercial</option>
      <option value="Cortes">Cortes</option>

     </select>
    </div>
   </div>
  </div>
  <span class="span">(*)Datos obligatorios</span>

  <div class="botones">
   <button type="button" class="b1" onclick="validar_jefe_area();">Agregar</button>
   <a href="<?php echo base_url('menu') ?>" class="b2 ">Cancelar</a>

  </div>
 </form>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_jefe_area.js"></script>
<script>
 $(document).ready(function() {
  $('.select2').select2();
 })
</script>
<?= $this->endsection() ?>