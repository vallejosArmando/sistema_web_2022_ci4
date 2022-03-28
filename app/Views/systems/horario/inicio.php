<?= $this->extend('layouts/frontend6.php') ?>
<?= $this->section('card') ?>
<div id="formulario">
 <form action="<?php echo base_url('agregar_horario'); ?>" id="form_horario" name="form_horario" method="POST" enctype="multipart/form-data" class="form">
  <div class="titulo">
   <p><?= $titulo ?> </p>
  </div>
  <div class="tit">
  </div>
  <div class="inputss"></div>

   <label class="label" for="hora_entrada"><span class="span">*</span>Entrada:</label>
   <input type="time" name="hora_entrada" class="input" id="hora_entrada">
   <label class="label" for="hora_salida"><span class="span">*</span>Salida:</label>
   <input type="time" name="hora_salida" class="input" id="hora_salida">

   <label class="label" for="empleado"><span class="span">*</span>Empleado</label>
   <select name="empleado" class="select2" id="empleado" style="width: 100%;">
    <option selected value="selected"></option>
    <option value="Pablo">Pablo</option>
    <option value="Juan">Juan</option>

   </select>

  </div>
  <span class="span">(*)Datos obligatorios</span>

  <div class="botones">
   <button type="button" class="b1" onclick="validar_horario();">Agregar</button>
   <a href="<?php echo base_url('menu') ?>" class="b2">Cancelar</a>

  </div>

 </form>
</div>
<?= $this->endSection() ?>


<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_horario.js"></script>
<script>
 $(document).ready(function() {
  $('.select2').select2();
 })
</script>
<?= $this->endSection(); ?>