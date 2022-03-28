<?= $this->extend('layouts/frontend6.php') ?>
<?= $this->section('card') ?>
<?php
$this->session = session();

if (isset($mensaje)) {
 ?>
 <div class="mensaje">
  <?= $mensaje?>::<?= $this->session->usuario ?>
 </div>
<?php }else{?>
  <div class="mensaje">
  <?= $mensaje2?>::----
 </div>
<?php } ?>
<?= $this->endSection() ?>
<?= $this->section('script') ?>

<?= $this->endSection() ?>