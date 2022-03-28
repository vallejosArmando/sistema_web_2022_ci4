<?= $this->extend('layouts/frontend6.php') ?>
<?= $this->section('card') ?>
<a href="<?php echo base_url() ?>/menu" class="b2">Regresar</a>
<br>
<br>
<div class="formulario">
 LOS DATOS GUARDADOS SON.
 <br>
 <p>El nombre del jefe de area es: "<?= $nombres ?>; </p>
 <p>El apellido paterno es: "<?= $ap ?>; </p>
 <p>El apllido matero es: "<?= $am ?>; </p>
 <p>El ci es: "<?= $ci ?>";
 <p>El telefono es: "<?=$telefono?>"</p>
 <p>El correo es: "<?=$correo?>"</p>
 <p>La fecha de insercion es: "<?=$fec_inicio?>;</p>
 <p>La fecha de modificacion es: "<?=$fec_fin?>;</p>
 <p>El area del jefe es: "<?= $area ?>"; </p>

</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_area.js"></script>
<?= $this->endSection(); ?>