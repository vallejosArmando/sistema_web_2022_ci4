 <?= $this->extend('layouts/frontend6.php') ?>
 <?= $this->section('card') ?>
 <div class="formulario">


   <form action="<?php echo base_url() ?>/agregar_empleado" id="form_empleado" name="form_empleado" method="POST" enctype="multipart/form-data" class="form">
     <div class="titulo">
       <p> <?= $titulo ?></p>
     </div>
     <div class="tit">
     </div>
     <div class="inputss">
       
       <label class="label"><span class="span">*</span>Tipo Empleado</label>


       <select class="select2" name="id_tipo" id="id_tipo" style="width: 100%;">
         <option selected="selected"></option>


         <option value="Plomero">Plomero</option>
         <option value="Albañil">Albañil</option>


       </select>

       <label class="label" for="nombre"><span class="span">*</span>Nombre</label>
       <input type="text" name="nombres" class="input" id="nombres" value="">


       <label class="label" for="am"><span class="span">*</span>Apellido Materno</label>
       <input type="text" name="am" class="input" id="am" value="">

       <label class="label" for="tel_fijo"><span class="span">*</span>Telefono fijo</label>
       <input type="text" name="tel_fijo" class="input" id="tel_fijo">
       <label class="label"><span class="span">*</span>Areas</label></label>
       <select class="select2" name="id_area" id="id_area" style="width: 100%; ">
         <option selected="selected"></option>


         <option value="Mantenimiento">Mantenimiento</option>
         <option value="comercial">comercial</option>
       </select>

       <label class="label" for="ap"><span class="span">*</span>Apellido Paterno</label>
       <input type="text" name="ap" class="input" id="ap">

       <label class="label" for="ci"><span class="span">*</span>Cedula</label>
       <input type="text" name="ci" class="input" id="ci">

       <label class="label" for="tel_cel"><span class="span">*</span>Telefono Celular</label>
       <input type="text" name="tel_cel" class="input" id="tel_cel">

       <label class="label" for="direccion"><span class="span">*</span>Direccion</label>
       <input type="text" name="direccion" class="input" id="direccion">
     </div>
     <span class="span">(*)Datos obligatorios</span>

     <div class="botones">
       <button type="button" class="b1" onclick="validar()">Agregar</button>
       <a href="<?php echo base_url('menu') ?>" class="b2">Cancelar</a>
     </div>
   </form>
 </div>
 <?= $this->endsection() ?>
 <?= $this->section('script') ?>
 <script type="text/javascript" src="<?= base_url() ?>../public/js/vali_empleado.js"></script>
 <script>
   $(document).ready(function() {
     $('.select2').select2();
   })
 </script>
 <?= $this->endsection() ?>