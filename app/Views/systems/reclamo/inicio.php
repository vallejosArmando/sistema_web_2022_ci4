<?= $this->extend('layouts/frontend6.php') ?>
<?= $this->section('card') ?>
<style media="screen">
 #uploadForm,
 #imagePreview {
  width: 720px;
  margin: 0;
 }

 .form  img {

  max-width: 250px;
  height: 180px;

 }
</style>
<div id="formulario">
 <form action="<?php echo base_url('agregar_reclamo') ?>" id="formulario_reclamo" name="formulario_reclamo" method="POST" enctype="multipart/form-data" class="form">
  <div class="titulo">

   <p> <?= $titulo ?> </p>
  </div>
  <div class="tit">


  </div>
  <div class="inputss">
   <div class="desplegar_bloques">
    <div class="bloque3">



     <label class="label" for="reg"><span class="span">*</span>Registro:</label><input type="text" class="input" name="reg" id="reg">
     <label class="label" for="nombres"><span class="span">*</span>Nombres:</label><input type="text" class="input" name="nombres" id="nombres">

     <label class="label" for="ap"><span class="span">*</span>Apellido paterno:</label><input type="text" class="input" name="ap" id="ap">

     <label class="label" for="am"><span class="span">*</span>Apellido materno:</label><input type="text" class="input" name="am" id="am">


     <label class="label" for="telefono"><span class="span">*</span>Telefono:</label><input type="text" class="input" name="telefono" id="telefono">

     <label class="label" for="correo"><span class="span">*</span>Correo:</label><input type="text" class="input" name="correo" id="correo">



     <br>
    </div>
   </div>
   <div class="desplegar_bloques">
    <div class="bloque4">





     <label class="label" for="barrio"><span class="span">*</span>Barrio:</label><input type="text" class="input" name="barrio" id="barrio">

     <label class="label" for="calle_avenida"><span class="span">*</span>Calle o avenida:</label><input type="text" class="input" name="calle_avenida" id="calle_avenida">

     <label class="label" for="entre_que_calles"><span class="span">*</span>Entre que calles:</label><input type="text" class="input" name="entre_que_calles" id="entre_que_calles">

     <label class="label" for="numero_de_casa"><span class="span">*</span>Numero de casa:</label><input type="text" class="input" name="numero_de_casa" id="numero_de_casa">
     <label class="label" for="codigo_usuario"><span class="span">*</span>Codigo del Usuario:</label><input type="text" class="input" name="codigo_usuario" id="codigo_usuario">



    </div>
   </div>
   <div class="desplegar_bloques">
    <div class="bloque5">


     <legend class="leg">Descripcion y lugar del reclamo:</legend>



     <label class="label" for="referencias"><span class="span">*</span>Referencias:</label>
     <textarea class="textarea" name="referencias" id="referencias"></textarea>

     <label class="label" for="descripcion_del_reclamo"><span class="span">*</span><span class="span">*</span>Descripcion:</label>
     <textarea class="textarea" name="descripcion_del_reclamo" id="descripcion_del_reclamo"></textarea>

     <div id="div"><label for="fotos">Foto del reclamo:</label><input type="file" name="fotos" id="fotos"></div>

     <div id="imagePreview"></div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <script type="text/javascript">
      (function() {
       function filePreview(input) {
        if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function(e) {
          $('#imagePreview').html("<img src='" + e.target.result + "'/> ")
         }
         reader.readAsDataURL(input.files[0]);
        }
       }
       $('#fotos').change(function() {
        filePreview(this);
       })
      })();
     </script>


     <label class="label" for="map">Mapa ubicacion:</label>
     <input type="text" class="input" name="map" id="map">


     <label class="label" for="otro_recurrente"><span class="span">*</span>Otro recurrente:</label><input type="text" class="input" name="otro_recurrente" id="otro_recurrente">
     <label class="label" for="telefono_del_recurrente"><span class="span">*</span>telefono:</label><input type="text" class="input" name="telefono_del_recurrente" id="telefono_del_recurrente">
     <label class="label" for="tipo_de_calzada"><span class="span">*</span>Tipo de calzada:</label>
     <select name="tipo_de_calzada" class="select2" id="tipo_de_calzada" style="width: 100%;">
      <option selected>..........</option>
      <option value="Tierra">Tierra</option>
      <option value="Empedrado">Empedrado</option>
      <option value="Asfalto">Asfalto</option>
      <option value="Adoquin">Adoquin</option>
      <option value="Cemento">Cemento</option>
      <option value="En la acera">En la acera</option>
     </select>

     <br>
    </div>
   </div>
  </div>



  <span class="span">(*)Datos obligatorios</span>

  <div class="botones">
   <button type="button" class="b1" onclick="validar_reclamo()">Agregar</button>
   <a href="<?php echo base_url('menu') ?>" class="b2">Cancelar</a>

  </div>

 </form>
</div>

<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="<?= base_url() ?>../public/js/vali_reclamo.js"></script>
<script>
 $(document).ready(function() {
  $('.select2').select2();
  
 })
</script>
<script>

</script>
<?= $this->endsection() ?>