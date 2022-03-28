<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?= base_url(); ?>/public/index.css">
   <link rel="stylesheet" href="<?= base_url(); ?>/public/login.css">

   

   <title>Document</title>
</head>

<body>
   <header>
      <div class="logo">
         <a href="<?= base_url('/login') ?>" style="text-decoration:none">
            <h2>SISTEMA</h2>
         </a>

      </div>
      <div class="">


         <input type="checkbox" id="nav-checkbox">
         <label for="nav-checkbox" class="trancicion">
            <img src="<?= base_url() ?>/public/foto/open5.jpg" alt="open menu" class="open"></img>
            <img src="<?= base_url() ?>/public/foto/close5.jpg" alt="close menu" class="close">
         </label>
         <ul class="nav-menu">
            <li><a href="<?= base_url('/') ?>">Inicio</a></li>
            <li></li>
            <li><a href="#">SERVICIOS</a></li>
            <li><a href="#">ACERCA DE COSAALT</a></li>
            <li><a href="#">EQUIPO DE TRABAJO</a></li>
            <li><a href="#">CONTACTENOS</a></li>
         </ul>
      </div>
   </header>
   <div class="contenido">
      <div id="mi_session">
         <form method="post" action="<?php echo base_url('/validar'); ?>" class="fff">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">


            <div class="titulo_session">

               <p>
                  Iniciar Session

               </p>
            </div>

            <div>



               <label for="" class="label">Usuario</label>

               <input type="text" class=" ff " id="" name="nom_usuario">
               <?php if (isset($error_nombre)) { ?>
                  <span class="span" style="color:red">
                  <?php echo $error_nombre;
               } ?></span>

            </div>

            <label for="" class="label">Clave</label>
            <input type="password" class=" ff" id="clave" name="clave" />
            <?php if (isset($error_clave)) { ?>
               <span class="span" style="color:red ;">
               <?php echo $error_clave;
            } ?></span>
               <?php if (isset($error)) { ?>
                  <span class="span" style="color:red">
                  <?php echo $error;
               } ?></span>


                  <div id="botones">
                     <input class="b1" type="submit" value="Login">
                     <a href="<?php echo base_url('/') ?>" class="b2">Canselar</a>
                  </div>

         </form>

      </div>
     
      


   </div>
</body>



</html>