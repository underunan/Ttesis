<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<meta name="description" content=""/>
	<title>Resultado de busqueda</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style_busqueda_item.css">
</head>
<body>
	<header class="container cabecera">
		<?php include 'barra-navegacion/navbar.php';?>
	</header>
	<!--
	<header class="container cabecera">
		<div class="row">
			<nav class="cabecera-nav">
				<div class="col-sm-12">
				   	<div class="topHead navbar navbar-default">
				   		<div class="navbar-header">
				   			<a href="#" class="navbar-brand">
				   				<img src="img/logo.png" alt="Brand">
				   			</a>
				   			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
				   				<span class="sr-only">Toggle navigation</span>
				   				<span class="icon-bar"></span>
				   				<span class="icon-bar"></span>
				   				<span class="icon-bar"></span>			
				   			</button>
				   		</div>
				   		<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
					   		<ul class="nav nav-pills pull-right hidden-xs">
					   			<li role="presentation" class="moneda dropdown">
					   				<a class="select-moneda dropdown-toggle"></a>
					   				<ul class="dropdown-menu" role="menu">
					   					<li><a href="#" class="item-dolar">USD</a></li>
					   					<li><a href="#" class="item-cordoba">NIC</a></li>
					   				</ul>
					   			</li>
						    	<li role="presentation" class="login">
							    	<a class="dropdown-toggle" aria-haspopup="false" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Únete</a>
							    	<div class="unete dropdown-menu">
							    		<h3>Únete</h3>
							    		<form class="row">
											<div class="input-group col-sm-12">
												<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
												<input type="text" class="_usuario form-control" placeholder="Usuario" data-validation="required">
											</div>
											<br>
											<div class="input-group col-sm-12">
												<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
												<input type="password" class="_pass form-control" placeholder="Contraseña" data-validation="required">
											</div>
											<br>
											<div class="input-group col-sm-4 col-sm-offset-7">
												<button type="button" class="btn-acceder btn btn-lg">Acceder</button>
											</div>
							    		</form>
							    	</div>
						    	</li>
						    	<li role="presentation"><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Publica</a></li>
						    	<li role="presentation"><a href="#"><span class="glyphicon glyphicon-pencil"></span> Registrate</a></li>
					    	</ul>
					    	<ul class="collapse nav nav-pills nav-stacked visible-xs" id="bs-navbar-collapse-1">
					   			<li role="presentation" class="moneda dropdown">
					   				<a class="select-moneda dropdown-toggle"></a>
					   				<ul class="dropdown-menu" role="menu">
					   					<li><a href="#" class="item-dolar">USD</a></li>
					   					<li><a href="#" class="item-cordoba">NIC</a></li>
					   				</ul>
					   			</li>
						    	<li role="presentation" class="login">
							    	<a class="dropdown-toggle" aria-haspopup="false" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Únete</a>
							    	<div class="unete dropdown-menu">
							    		<h3>Únete</h3>
							    		<form class="row">
											<div class="input-group col-sm-12">
												<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
												<input type="text" class="_usuario form-control" placeholder="Usuario" data-validation="required">
											</div>
											<br>
											<div class="input-group col-sm-12">
												<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
												<input type="password" class="_pass form-control" placeholder="Contraseña" data-validation="required">
											</div>
											<br>
											<div class="input-group col-sm-4 col-sm-offset-7">
												<button type="button" class="btn-acceder btn btn-lg">Acceder</button>
											</div>
							    		</form>
							    	</div>
						    	</li>
						    	<li role="presentation"><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Publica</a></li>
						    	<li role="presentation"><a href="#"><span class="glyphicon glyphicon-pencil"></span> Registrate</a></li>
					    	</ul>
				    	</div>
				   	</div>
				 </div>  
			</nav>
		</div>
		<div class="cabecera-2 row">

			<div class="col-xs-8 col-sm-10 pull-right">
				<ol class="breadcrumb">
					<li><a href="/tesis_2_0"><span class="glyphicon glyphicon-home"></span> Inicio</a><span class="glyphicon glyphicon-menu-right"></span></li>
					<li class="active">Producto</li>
				</ol>
			</div>
			<div class="logo-tienda col-xs-4 col-sm-2 pull-left">
				<a href="info_tienda.html">
					<img src="img/silla_playera.jpg" class="img-responsive img-circle" alt="nombre de tienda">
					<span class="nombre-tienda">Nombre de la tienda</span>
				</a>
			</div>
		</div>
	</header>
	-->
	<section class="container">
		<div class="row">
			<div class="barra-izquierda col-sm-5">
				<figure class="thumbnail">
					<img src="img/silla_playera.jpg" class="img-responsive" alt="silla playera">
				</figure>
				
			</div>
			<div class="barra-derecha col-sm-7 col-xs-12">
				<div class="barra-titulo row">
					<h3 class="col-sm-12">Silla playera</h3>
					<div class="item-votacion col-sm-2">
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					</div>
					<p class="col-sm-10 text-left"><em>Este producto tiene 20 visitas</em></p>
				</div>
				<div class="barra-detalle row">
					<div class="item-detalle col-sm-12">
						<p class="item-codigo"><span>Codigo producto: </span> 1234567</p>
						<p class="item-modelo"><span>Modelo: </span> Nombre del modelo.</p>
						<p class="item-marca"><span>Marca: </span> Nombre de la marca del producto.</p>
					</div>
					<div class="item-descripcion col-sm-12">
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
					</div>
				</div>
				<div class="barra-talla-color row">
					<div class="item-color col-sm-5">
						<span>Colores</span>
						<ul class="list-inline">
							<li class="color_1 col-sm-2 well"></li>
							<li class="color_2 col-sm-2 well"></li>
							<li class="color_3 col-sm-2 well"></li>
						</ul>
					</div>
					<div class="item-talla col-sm-5 col-sm-push-1">
						<span>Tallas</span>
						<ul class="list-inline">
							<li class="talla_1 col-sm-2 well">S</li>
							<li class="talla_2 col-sm-2 well">M</li>
							<li class="talla_3 col-sm-2 well">L</li>
						</ul>
					</div>
				</div>
				<div class="barra-precio-compartir row">
					<div class="item-precio col-sm-4">
						<span class="badge pull-right"><s>$250</s></span>
						<div class="text-right">$150</div>
					</div>
					<div class="item-compartir col-sm-8 col-xs-12 well">
						<div class="item-icon row">
							<a href="#" class="col-sm-3 col-xs-12 btn btn-lg btn-danger" data-toggle="mensaje" data-placement="top" title="Compartir">
								<span class="glyphicon glyphicon-retweet"></span>
							</a>
							<a class="col-sm-3 col-xs-12 btn btn-lg btn-warning" data-toggle="mensaje" data-placement="top" title="Comunicarse">
								<span class="glyphicon glyphicon-envelope"></span>
							</a>
							<a href="#mapa" class="info-map col-sm-3 col-xs-12 btn btn-lg btn-info" data-toggle="mensaje" data-placement="top" data-title="Ubicación de mapa">
								<span class="glyphicon glyphicon-map-marker"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row panel-producto">
			<div class="col-sm-12 col-xs-12 titulo-panel">
				<h4>Productos relacionados a la tienda</h4>
			</div>
			<div class="col-sm-12 cuerpo-panel">
				<div class="row resultados">
						<div class="col-sm-4">
							<div class="thumbnail">
								<h4><span class="label label-danger pull-right"><span class=" glyphicon glyphicon-piggy-bank"></span>15% Desc</span></h4>
								<img src="img/smartphone.jpg" alt="smartphone" class="img-responsive">
									<div class="caption">
										<h4>Samsung galaxy</h4>
										<div class="item-descripcion">
											<span class="item-valor"><s>$500</s></span>
											<span class="item-desc">$435</span>
											<div class="item-votacion pull-right">
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="item-num-vota">12 votaciones</span>
											</div>
										</div>
										<div><a href="#" class="btn btn-info" role="button">Detalles</a></div>
									</div>
								</div>
						</div>

						<div class="col-sm-4">
							<div class="thumbnail">
								<h4><span class="label label-danger pull-right"><span class=" glyphicon glyphicon-piggy-bank"></span>15% Desc</span></h4>
								<img src="img/silla_playera.jpg" alt="silla playera" class="img-responsive">
									<div class="caption">
										<h4>Silla playera</h4>
										<div class="item-descripcion">
											<span class="item-valor"><s>$500</s></span>
											<span class="item-desc">$435</span>
											<div class="item-votacion pull-right">
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="item-num-vota">12 votaciones</span>
											</div>
										</div>
										<div><a href="#" class="btn btn-info" role="button">Detalles</a></div>
									</div>
								</div>
						</div>

						<div class="col-sm-4">
							<div class="thumbnail">
								<h4><span class="label label-danger pull-right"><span class=" glyphicon glyphicon-piggy-bank"></span>15% Desc</span></h4>
								<img src="img/zapatos.jpg" alt="zapatos" class="img-responsive">
								<div class="caption">
										<h4>Deportivos Nike</h4>
										<div class="item-descripcion">
											<span class="item-valor"><s>$500</s></span>
											<span class="item-desc">$435</span>
											<div class="item-votacion pull-right">
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="item-num-vota">12 votaciones</span>
											</div>
									</div>
									<div><a href="#" class="btn btn-info" role="button">Detalles</a></div>
								</div>
							</div>
						</div>
				</div>
			</div>	
		</div>
		
		
	</section>
	<section class="aside">
		<div id="mapa" class="">
		</div>
	</section>

<footer class="container-fluid">
	<div class="row">
		<ul class=" col-sm-5 list-inline text-right">
			<li><a href="#">Iniciar busqueda</a></li>
			<li><a href="#">Quienes somos</a></li>
			<li><a href="#">Publica tu tienda</a></li>
		</ul>
		<ul class="iconos-sociales col-sm-3 pull-right list-inline">
			<li id="icon_facebook"><a href="#facebook"></a></li>
			<li id="icon_twitter"><a href="#twitter"></a></li>
		</ul>		
	</div>
</footer>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript" src="js/script-busqueda-item.js"></script>
</body>
</html>