<!DOCTYPE html>
<html lang="es">
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<title>Explora las tiendas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/icommon-free/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<body>
		<!--[if lt IE 8]>
		<script src="http://HTML5shim.googlecode.com/svn/trunk/HTML5.js"></script>
		<![endif]-->
	<header class="container cabecera">
		<?php include 'barra-navegacion/navbar.php';?>
	</header>

	<section class="container-fluid video_form">
		<div style="height:500px; width:100%;" data-vide-bg="video/video">
		</div>
		<form action="" class="formulario">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Lugar a buscar">
			</div>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Producto a buscar">
			</div>
			<div class="input-group">
				<button class="bnt btn-danger btn-lg" id="bntBuscar">Buscar</button>
			</div>
		</form>
	</section>
		<section class="container informacion">
			<div class="row">
			<article class="col-md-4 col-lg-4">
				<span class="icon-brujula"></span>
				<h2>EXPLORA</h2>
				<div>
					<p>
						Explora las tiendas desde tu casa.	
					</p>
				</div>
			</article>
			<article class="col-md-4 col-lg-4">
				<span class="icon-ubicacion"></span>
				<h2>ENCUENTRA</h2>
					<div>
						<p>
							Buscá sin salir de tu casa.
						</p>
					</div>
			</article>
			<article class="col-md-4 col-lg-4">
				<span class="icon-computer"></span>
				<h2>ENCUENTRA</h2>
					<div>
						<p>
							Buscá sin salir de tu casa.
						</p>
					</div>
			</article>
			</div>
		</section>
		
		<?php include 'productos/producto.php'; ?>
	<?php include 'pie-pagina/footer.php';?>
<script type="text/javascript" src="js/modernizr.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw86BjBuILI2xv5MAsgPfOOBQUc0ZByXY&callback=inicializar" async defer></script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.vide.js"></script>
<script type="text/javascript" src="js/bntBuscar.js"></script>
<script type="text/javascript" src="js/map_script.js"></script>
</body>
</html>