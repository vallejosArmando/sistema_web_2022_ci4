<?= $this->extend('layouts/frontend6.php') ?>
<?= $this->section('card') ?>
<a href="<?php echo base_url() ?>/menu" class="b2">Regresar</a>
<br>
<br>
<div class="formulario">
 LOS DATOS GUARDADOS SON.
 <br>
 <p>El nombre del empleado es: "<?= $nombre?>; </p>
 <p>El apellido paterno es: "<?= $ap?>; </p>
 <p>El apllido matero es: "<?= $am?>; </p>
 <p>El ci es: "<?= $ci?>";
 <p>El tipo del empleado es: "<?= $tipo?>"; </p>
 <p>El area del empleado es: "<?= $area?>"; </p>
 <p>Direccion: <?= $direccion ?> </p>

</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_area.js"></script>
<?= $this->endSection(); ?>