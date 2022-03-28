<?= $this->extend('layouts/frontend6.php') ?>
<?= $this->section('card') ?>
<a href="<?php echo base_url() ?>/menu" class="b2">Regresar</a>
<div class="formulario">

 <br>
 <br>
 LOS DATOS GUARDADOS SON.
 <br>
 <p> Tipo:   <?= $tipo ?> </p>
 <p> Descripcion:  <?= $descripcion ?> </p>


</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script type="text/javascript" src="<?= base_url() ?>../public/js/vali_area.js"></script>
<?= $this->endSection(); ?>