<?php
$this->session = session();
$this->session->start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="<?= base_url(); ?>/public/css/header.css">
 <link rel="stylesheet" href="<?= base_url(); ?>/public/css/side_navs.css">

 <link rel="stylesheet" href="<?= base_url(); ?>/public/css/contenidos.css">
 <link rel="stylesheet" href="<?= base_url(); ?>/public/css/condicion.css">

 <link rel="stylesheet" href="<?= base_url(); ?>/public/css/formulario.css">
 <link rel="stylesheet" href="<?= base_url(); ?>/public/css/form_buscar.css">
 <link rel="stylesheet" href="<?= base_url(); ?>/public/css/mymodal.css">
 <link rel="stylesheet" href="<?= base_url(); ?>/public/css/vienvenida.css">
 <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/select2.all.min.css">


 <link rel="stylesheet" href="<?= base_url(); ?>/public/css/tablas.css">
 <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/all.min.css">

 <title>Document</title>
</head>

<body>
 <header>
  <?= $this->include('layouts/inc/logo.php'); ?>
  <input type="checkbox" class="gg" id="nav-checkbox">
  <label for="nav-checkbox" class="trancicion">
   <img src="<?= base_url() ?>/public/foto/open5.jpg" alt="open menu" class="open"></img>
   <img src="<?= base_url() ?>/public/foto/close5.jpg" alt="close menu" class="close">
  </label>
  <div id="inicio">

   <a href="<?= base_url('/') ?>" class="a">Home</a>
  </div>


 </header>

 <div class="loguet">
  <ul class="menu2">
   <a href="#" class="us"><i class="fa fa-user" aria-hidden="false"></i>
    Rol:
    <?php if (isset($this->session->rol)) {

     $data =  $this->session->rol;
     echo $data;
    } else {
     $data = "----";
     echo $data;
    } ?>
   </a>
   <li id="item">


    <ul id="desple">
     <?php if (isset($this->session->rol)) { ?>
      <li><a href="#">Perfil</a></li>
      <li><a href="<?= base_url('/update_pass') ?>">Cambiar clave</a></li>
      <li><a href="<?= base_url('/logout') ?>">Logout</a></li>
     <?php  } else { ?>
      <li><a href="<?= base_url('/login') ?>">Sig in</a></li>

     <?php  } ?>

    </ul>
   </li>


  </ul>
 </div>
 <nav class="sidebar">
  <div class=" perfil">
   <img src="<?= base_url() ?>/public/foto/nieve.jpg">
   <h3> Usuario:
    <?php if ($this->session->usuario) {

     $data = $this->session->usuario;
     echo $data;
    } else {
     $data = "------- !";
     echo $data;
    } ?>

   </h3>

  </div>
  <ul>
   <?= $this->include('layouts/inc/nav6.php'); ?>
  </ul>
 </nav>
 <div class="contenido">

  <?= $this->renderSection('card') ?>
 </div>

 <script type="text/javascript" src="<?= base_url() ?>/public/assets/js/jquery.disableAutoFill.js"></script>
 <script type="text/javascript" src="<?= base_url() ?>/public/assets/js/jquery.min.js"></script>
 <script type="text/javascript" src="<?= base_url() ?>/public/assets/js/select2.min.js"></script>
 <script type="text/javascript" src="<?= base_url() ?>/public/assets/js/ionicons.esm.js"></script>
 <script type="text/javascript" src="<?= base_url() ?>/public/assets/js/fontawenson.js"></script>

 <script type="text/javascript" src="<?= base_url() ?>/public/js/expresiones_regulares.js"></script>


 <?= $this->renderSection('script'); ?>
 <script>
  $('#confirm-delete').on('show.bs.modal', function(e) {
   $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
  });
 </script>
 <script>
  $('.activar').click(function() {
   $(this).next('.sub_menu').slideToggle();
   $(this).find(' .iconito').toggleClass('rotate');
   $(this).find(' .icono_grupo').toggleClass('luz2');
   $(this).filter('.activar').toggleClass('luz');
  });
  $(document).ready(function() {

   $('#buscar').select2();
   $("input").attr('autocomplete', 'off');

  })
 </script>
 <script>
  $('.gg').click(function() {
   $('.navigation').toggleClass('click_menu');
   $('.contenido').toggleClass('click_contenido');
   $('.sidebar').toggleClass('show');

  });
  $('.us').click(function() {

   $('#desple').toggleClass('uss');
  })
 </script>

</body>

</html>