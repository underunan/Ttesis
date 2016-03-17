<div class="row">
	<nav class="cabecera-nav">
		<div class="col-sm-12 col-md-12">
				<div class="topHead navbar navbar-default">
				   	<div class="container-fluid">
				   		<div class="navbar-header">
							<button type="button" id="btnMenu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
				   				<span class="icon icon-menu3"></span>		
				   			</button>
				   			
							
				   			<a href="#" class="navbar-brand">
				   				<img src="img/logo.png" alt="Brand">
				   			</a>
				   			
				   		</div>

				   		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
							<ul class="nav navbar-nav pull-right col-xs-12 col-sm-8 col-md-5">
					    	<li>
						    	<a href="#modalUnete" data-toggle="modal">
						    	<span class="icon icon-user"></span> Únete
						    	</a>
					    	</li>
					    	<li>
					    		<a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Publica</a>
					    	</li>
					    	<li role="presentation"><a href="registro.php"><span class="glyphicon glyphicon-pencil"></span> Registrate</a></li>
					    	<li role="presentation" class="dropdown">
					    		<a href="#modalCatalogo" data-toggle="modal"><span class="icon icon-menu3"></span> Catálogo</a>
					    		<!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="icon icon-menu3"></span> Catálogo</a> -->

					    		<!--<ul class="dropdown-menu nav nav-pills nav-stacked" aria-labelledby="dLabel">
					    		<li role="separator" class="divider"></li>
				   		 		<li class=""><a href="#"><span class="icon icon-display pull-right"></span>Elétronico</a></li>
				   		 		<li role="separator" class="divider"></li>
				   		 		<li class=""><a href="#"><span class="icon icon-man pull-right"></span> Ropa hombre</a></li>
				   		 		<li role="separator" class="divider"></li>
				   		 		<li class=""><a href="#"><span class="icon icon-woman pull-right"></span> Ropa mujeres</a></li>
				   		 		<li role="separator" class="divider"></li>
				   		 		<li class=""><a href="#"> <span class="icon icon-plus pull-right"></span> Otros</a></li>
				   		 		<li role="separator" class="divider"></li>
				   		 	</ul>-->
					    	</li>
				    	</ul>
				   		 </div>

				   		<!--<ul class="nav nav-pills pull-right hidden-xs">
					    	<li role="presentation">
						    	<a href="#modalUnete" data-toggle="modal">
						    	<span class="glyphicon glyphicon-user"></span>Únete
						    	</a>
					    	</li>
					    	<li role="presentation"><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Publica</a></li>
					    	<li role="presentation"><a href="registro.php"><span class="glyphicon glyphicon-pencil"></span> Registrate</a></li>
				    	</ul>-->
					<!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				    	<ul class="nav nav-pills nav-stacked visible-xs col-xs-12" >
						    <li role="presentation">
						    	<a href="#modalUnete" data-toggle="modal">
						    	<span class="icon icon-user"></span> Únete
						    	</a>
					    	</li>
					    	<li role="presentation">
					    		<a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Publica</a>
					    	</li>
					    	<li role="presentation"><a href="registro.php"><span class="glyphicon glyphicon-pencil"></span> Registrate</a></li>
					    	<li role="presentation" class="dropdown">
					    		<a href="#" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="icon icon-menu3"></span> Catálogo</a>

					    		<ul class="dropdown-menu">
					   		 		<li class=""><a href="#"><span class=""></span> Elétronico</a></li>
					   		 		<li class=""><a href="#">Ropa hombre</a></li>
					   		 		<li class=""><a href="#">Ropa mujeres</a></li>
					   		 		<li class=""><a href="#">Otros</a></li>
				   		 		</ul>
					    	</li>
					    </ul>
					    </div>-->
					 </div>
			</div>
			
			<div class="modal fade" id="modalCatalogo" tabindex="-1" role="dialog" aria-labelledby="myModalUnete">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content well">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	<span aria-hidden="true">&times;</span>
				        </button>

				        <!--Titulo de la ventana-->
				        <h3 class="modal-title text-center" id="myModalUnete">Catálogo</h3>
				      </div>

				      <!--Formulario de inicio de sesión-->
				      <div class="modal-body">
				        <div class="container-fluid">
				        	<ul class="nav nav-pills nav-stacked" aria-labelledby="dLabel">
				   		 		<li class=""><a href="#"><span class="icon icon-display pull-right"></span>Elétronico</a></li>

				   		 		<li class=""><a href="#"><span class="icon icon-man pull-right"></span> Ropa hombre</a></li>

				   		 		<li class=""><a href="#"><span class="icon icon-woman pull-right"></span> Ropa mujeres</a></li>

				   		 		<li class=""><a href="#"> <span class="icon icon-plus pull-right"></span> Otros</a></li>

				   		 	</ul>
				        </div>
				      </div>
						
						<div class="modal-footer">
					  		
					 	</div>
				    </div>
				  </div>
				</div>

			<div class="modal fade" id="modalUnete" tabindex="-1" role="dialog" aria-labelledby="myModalUnete">
				  <div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content well">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	<span aria-hidden="true">&times;</span>
				        </button>

				        <!--Titulo de la ventana-->
				        <h4 class="modal-title text-center" id="myModalUnete">Iniciar sesión</h4>
				      </div>

				      <!--Formulario de inicio de sesión-->
				      <div class="modal-body">
				        <div class="container-fluid">
				        	<div class="row">
				        		<form action="">
				        			<div class="form-group has-success has-feedback">
				        				<input type="email" class="form-control" aria-describedby="inputEmail" placeholder="Correo electrónico" name="email" required autofocus>
				        				<span class="form-control-feedback">@</span>
				        			</div>
				        			<div class="form-group has-success has-feedback">
				        				<input type="password" class="form-control" aria-describedby="inputPassword" placeholder="Contraseña" name="password" required autofocus>
				        				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				        			</div>
				        			<h5 class="text-center"><a href="#" class="text-danger">¿Olvidastes tu contraseña?</a></h5>
				        			<button type="button" class="btn btn-danger btn-md col-xs-12">Iniciar sesión</button>
				        		</form>
				        	</div>
				        </div>
				      </div>
						
						<div class="modal-footer">
					  		<h5 class="text-left"><span class="helpBlock">¿No tienes una cuenta?</span><a href="registro.php" class="text-danger"> Regístrate</a></h5>
					 	</div>
				    </div>
				  </div>
				</div>
			<!--Fin de inicio de sesión-->

		</div>  
	</nav>
</div>