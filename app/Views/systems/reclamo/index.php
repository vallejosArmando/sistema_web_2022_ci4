<?= $this->extend('layouts/frontend6.php') ?>
<?= $this->section('card') ?>
<a href="<?php echo base_url() ?>/menu" class="b2">Regresar</a>
<br>
<br>
<div class="formulario">
 LOS DATOS GUARDADOS SON.
 <br>
 <?php
 echo " <br><a href='reclamo_socios.php'>Volver</a>'";

 echo '.. <link rel="stylesheet" href="info.css">
 <header><h1>DATOS GUARDADOS CON EXITO</h1></header>
 <
 <table border="2" class="tabla"> <tr><td>
<p> Nombre : ' . $nombres . '</p>
<p>Apellido paterno :  ' . $ap . ' </p>
<p>Apellido materno :  ' . $am . ' </p>
<p>Telefono : ' . $telefono . ' </p>
<p>Correo :  ' . $correo . '</p>
<p>Barrio : ' . $barrio . '</p>
<p>Calle o avenida : ' . $calle_avenida . '</p>
<p>Entre que calles : ' . $entre_que_calles . '</p>
<p>Numero de casa : ' . $numero_de_casa . '</p>
</td><td>
<p>Referencias : ' . $referencias . '</p>
<p>Descripcion del reclamo : ' . $descripcion_del_reclamo . '</p>
<p>Mapa : ' . $map . '</p>
<p>Otro recurrente : ' . $otro_recurrente . '</p>
<p>Telefono del recurrente : ' . $telefono_del_recurrente . '</p>
<p>Tipo de calzada : ' . $tipo_de_calzada . '</p>
</td><th  class="imagen"> <b><p>FOTO</p></b>
 <img src="' . $fotos . '" width="200">
</th></tr>

</table>';
 ?>
 <div id="div"><label for="fotos">Foto del reclamo:</label>



  <input type="file" name="fotos" id="fotos" value="<?= $image?>">
 </div>

 <div id="imagePreview"></div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script type="text/javascript">
  (function() {
   function filePreview(input) {
    if (input.files && input.files[0]) {
     var reader = new FileReader();
     reader.onload = function(e) {
      $('#imagePreview').html("<img src='" + e.target.result + "'/>")
     }
     reader.readAsDataURL(input.files[0]);
    }
   }
   $('#fotos').change(function() {
    filePreview(this);
   })
  })();
 </script>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_area.js"></script>
<?= $this->endSection(); ?>
<!-- 
private function _upload($id)
{

if($imageFile = $this->request->getFile('image')){

if($imageFile->isValid() && !$imageFile->hasMoved()){

// validaciones
$validated = $this->validate([
'image' => [
'uploaded[image]',
'mime_in[image,image/jpg,image/gif,image/png]'
]
]);
if($validated){
echo "ok";
$newName = $imageFile->getRandomName();
//$imageFile->move(WRITEPATH . 'uploads/avatar/', $newName);
$imageFile->move(ROOTPATH.'public/uploads', $newName);
$personModel = new PersonModel();
$personModel->update($id, [
'image' => $newName
]);

return null;

}else {
return $this->validator->getError("image");
}

}
}
} -->