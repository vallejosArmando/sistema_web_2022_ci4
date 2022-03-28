<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" carga="IE=edge">
	<meta name="viewport" carga="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url(); ?>/public/index.css">
	<title>Document</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
		<h1>Vien venido al sistema</h1>

	</div>
	<div class="carga">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, vero, natus temporibus quae corrupti dolorem perspiciatis nesciunt quasi incidunt dolores impedit, accusantium error expedita. Unde dolorem deleniti delectus possimus amet.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, vero, natus temporibus quae corrupti dolorem perspiciatis nesciunt quasi incidunt dolores impedit, accusantium error expedita. Unde dolorem deleniti delectus possimus amet.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, vero, natus temporibus quae corrupti dolorem perspiciatis nesciunt quasi incidunt dolores impedit, accusantium error expedita. Unde dolorem deleniti delectus possimus amet.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, vero, natus temporibus quae corrupti dolorem perspiciatis nesciunt quasi incidunt dolores impedit, accusantium error expedita. Unde dolorem deleniti delectus possimus amet.</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, vero, natus temporibus quae corrupti dolorem perspiciatis nesciunt quasi incidunt dolores impedit, accusantium error expedita. Unde dolorem deleniti delectus possimus amet.</p>
	</div>
	<script>
		$(document).ready(function() {
			$(window).bind('scroll', function() {
				var claro = 50;

				if ($(window).scrollTop() > claro) {
					$('header').addClass('rojo');
				} else {
					$('header').removeClass('rojo');

				}
			})
		})
	</script>
</body>

</html>