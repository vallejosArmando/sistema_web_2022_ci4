<?= $this->extend('layouts/frontend6.php') ?>
<?= $this->section('card') ?>
<a href="<?php echo base_url() ?>/menu" class="b2">Regresar</a>
<br>
<br>
<div class="formulario">
 LOS DATOS GUARDADOS SON.
 <br>
 <?php
 echo "<br>La hora de entrada es: ".$hora_entrada;
 echo "<br>La hora de salida es: ".$hora_salida;
 echo"<br>El id del empleado es: ".$empleado;
?>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_area.js"></script>
<?= $this->endSection(); ?>