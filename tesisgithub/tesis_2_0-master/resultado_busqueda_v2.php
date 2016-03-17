<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<meta name="description" content=""/>
	<title>Resultado de busqueda</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style_search_v2.css">
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
				   	<div class="topHead nav nav-pills">
				   		<div class="navbar-header"><a href="#" class="navbar-brand"><img src="img/logo.png" alt="Brand"></a></div>
				   		<ul class="nav nav-pills pull-right">
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
			</nav>
		</div>
	</header>
	-->
	

	<section class="section-map">
		<!--Mapa ubicado en la parte derecho-->
		<div class="aside">
			<div id="map-canvas"></div>
		</div>

		<div class="aside-bar container">
			<!--Filtros de busqueda-->
			<div class="row well search">
				<div class="col-sm-12">
					<form action="" class="form-horizontal">
						<div class="form-group line">
							<label for="form-group" class="col-sm-2 control-label">Lugar a buscar</label>
							<div class="input-group col-xs-12 col-sm-6">
								<span class="input-group-addon input-txt"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
								<input type="text" class="form-control input-md input-txt" placeholder="Lugar a buscar" name="lugar">
							</div>
						</div>
						<div class="form-group line">
							<label for="form-group" class="col-sm-2 control-label">Articulo a buscar</label>
							<div class="input-group col-sm-6 col-xs-12">
								<span class="input-group-addon input-txt"><span class="glyphicon glyphicon-search"></span></span>
								<input type="text" class="form-control input-md input-txt" placeholder="Articulo a buscar" name="articulo">
							</div>
						</div>
						<!--Filtro de busqueda-->
						<div id="filtro" class="panel-collapse collapse">
							<div class="form-group rango line">
								<label for="form-group" class="col-sm-3 control-label">Rango precio</label>
								<div class="input-group col-sm-8 col-xs-12">
									<input type="text" id="amount-1" readonly>
									<input type="text" id="amount-2" readonly>
									<div id="slider-range"></div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="form-group" class="col-sm-2 col-xs-12 control-label">Talla</label>
								<div class="input-group col-sm-3">
									<div class="btn-group talla-item" data-toggle="buttons">
									<label class="btn btn-success"><input type="checkbox" autocomplete="off">16</label>
									<label class="btn btn-success"><input type="checkbox" autocomplete="off">S</label>
									<label class="btn btn-success"><input type="checkbox" autocomplete="off">M</label>
									<label class="btn btn-success"><input type="checkbox" autocomplete="off">L</label>
									</div>
								</div>
							</div>
						</div>
						<!--Fin de filtro de busqueda-->
						<div class="form-group">
							<button class="col-sm-6 col-xs-12 bnt btn-danger btn-lg btn-buscar" type="button"><span class="glyphicon glyphicon-search"></span>Buscar</button>
						</div>
						<div class="form-group">
							<a class="col-sm-6 col-xs-12 btn btn-info btn-lg btn-filtro" data-parent="form" data-toggle="collapse" data-target="#filtro" aria-expanded="true" aria-controls="filtro"><span class="glyphicon glyphicon-menu-down"></span> Más filtro</a>
						</div>
					</form>
				</div>
			</div>

			<!--Resultados de busquedas-->
			<div class="resultados">
				<div class="row">

					<article class="col-sm-6">
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
									<div><a href="busqueda_item.html" class="btn btn-info" role="button">Detalles</a></div>
								</div>
							</div>
					</article>

					<article class="col-sm-6">
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
									<div><a href="busqueda_item.html" class="btn btn-info" role="button">Detalles</a></div>
								</div>
							</div>
					</article>

					<article class="col-sm-6">
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
									<div><a href="busqueda_item.html" class="btn btn-info" role="button">Detalles</a></div>
								</div>
							</div>
					</article>

					</div>
				</div>
			</div>	
		</div>
	</section>
	
	

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> -->
<script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?callback=inicializar&key=AIzaSyAzfZm59iFzSPrwsc781ByiEsKl4aeuZow" async defer>
</script>
<script type="text/javascript" src="js/map_script.js"></script>
<script type="text/javascript" src="js/script_slider.js"></script>
</body>
</html>