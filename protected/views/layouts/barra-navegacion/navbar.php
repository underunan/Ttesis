
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
				   		                         		<?php $this->widget('zii.widgets.CMenu',array(
                        		    'htmlOptions' => array('class'=>'nav navbar-nav pull-right col-xs-12 col-sm-8 col-md-6 col-lg-5'),
                        		    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
                                    'encodeLabel'=>false,
                                    'activeCssClass' => 'active',
                        		    'items'=>array(
                        			array('label'=>' Inicio', 'url'=>array('/site/index'), 'linkOptions'=> array('class' => 'glyphicon glyphicon-bullhorn')),
                        			array('label'=>' Catálogo', 'url'=>array('#modalCatalogo'), 'linkOptions'=> array('class' => 'icon icon-menu3', 'data-toggle'=>'modal')),
                        			array('label'=>' Ubicación', 'url'=>array('#modalCatalogo2'), 'linkOptions'=> array('class' => 'icon icon-menu3', 'data-toggle'=>'modal'), 'visible'=>!Yii::app()->user->isGuest),
                        			array('label'=>' Únete', 'url'=>array('/user/login'), 'linkOptions'=> array('class' => 'icon icon-user', 'data-toggle' => "modal"),'visible'=>Yii::app()->user->isGuest),
                        			array('label'=>' Registrate', 'url'=>array('/user/registration'), 'linkOptions'=> array('class' => 'glyphicon glyphicon-pencil'), 'visible'=>Yii::app()->user->isGuest),
                        			array('label'=>' Perfil ('.Yii::app()->user->name.') <span class="caret"></span>', 'url'=>array(''), 'linkOptions'=> array('class' => 'icon icon-user dropdown-toggle','data-toggle' => 'dropdown'), 'visible'=>!Yii::app()->user->isGuest,
                        			'items'=>array(
                        			        array('label'=>' Ver mi perfil', 'url'=>array('/user/profile','tag'=>'Ver mi perfil'),'linkOptions'=>array('class'=>'glyphicon glyphicon-cog')),
                        			        array('label'=>'', 'url'=>array('','tag'=>''),'linkOptions'=>array('class'=>'')),
                        			        array('label'=>' Agregar producto', 'url'=>array('/producto/create','tag'=>'Agregar producto'),'linkOptions'=>array('class'=>'glyphicon glyphicon-pencil'),'visible'=>!Yii::app()->user->isGuest),
                        			        array('label'=>'', 'url'=>array('','tag'=>''),'linkOptions'=>array('class'=>'')),
                                            array('label'=>' Salir', 'url'=>array('/site/logout','tag'=>'Salir'),'linkOptions'=> array('class'=>'glyphicon glyphicon-off'), 'visible'=>!Yii::app()->user->isGuest),
                                        ),
                        'itemOptions'=>array('class'=>'dropdown')),
                        			)
                        		)); ?>
                    	</div>
		</header>



				   		 </div>


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
				   		 		<?php /* $this->widget('zii.widgets.CMenu',array(
                        		    'htmlOptions' => array('class'=>'nav nav-pills nav-stacked', 'aria-labelledby'=>'dLabel'),
                        		    'items'=>array(
                        			array('label'=>' agregar', 'url'=>array('/producto/create'), 'linkOptions'=> array('class' => 'icon icon-plus pull-right')),
                        			array('label'=>' Electronico', 'url'=>array(''), 'linkOptions'=> array('class' => 'icon icon-display pull-right')),
                        			array('label'=>' Ropa', 'url'=>array(''), 'linkOptions'=> array('class' => 'icon icon-man pull-right'))
                        			)
                        		));
                        		*/

                        		 ?>

                        	<ul class="nav nav-pills nav-stacked" aria-labelledby="dLabel">
				   		 		<li class=""><a href="?r=producto%2Findex&Producto%5Bidcategoria%5D=2&yt0=Buscar"><span class="icon icon-display pull-right"></span> Eléctronico</a></li>
				   		 		<li class=""><a href="?r=producto%2Findex&Producto%5Bidcategoria%5D=3&yt0=Buscar"><span class="icon icon-woman pull-right"></span> Ropa para Damas</a></li>
				   		 		<li class=""><a href="?r=producto%2Findex&Producto%5Bidcategoria%5D=4&yt0=Buscar"> <span class="icon icon-plus pull-right"></span> Ropa de caballeros</a></li>
				   		 		<li class=""><a href="?r=producto%2Findex&Producto%5Bidcategoria%5D=6&yt0=Buscar"> <span class="icon icon-plus pull-right"></span> Vehiculos</a></li>
								<?php
								if(!Yii::app()->user->isGuest){ ?>
								<li class=""><a href="?r=producto/create"><span class="icon icon-plus pull-right"></span>Agregar un producto</a></li>
								<?php } ?>
				   		 	</ul>


				        </div>
				      </div>

				      <!--div class="modal-body">
				        <div class="container-fluid">
				        	<ul class="nav nav-pills nav-stacked" aria-labelledby="dLabel">
				   		 		<li class=""><a href="#"><span class="icon icon-display pull-right"></span>Elétronico</a></li>

				   		 		<li class=""><a href="#"><span class="icon icon-man pull-right"></span> Ropa hombre</a></li>

				   		 		<li class=""><a href="#"><span class="icon icon-woman pull-right"></span> Ropa mujeres</a></li>

				   		 		<li class=""><a href="#"> <span class="icon icon-plus pull-right"></span> Otros</a></li>

				   		 	</ul>
				        </div>
				      </div-->

						<div class="modal-footer">

					 	</div>
				    </div>
				  </div>
				</div>
<?php /*********************************************************************************/?>


			<div class="modal fade" id="modalCatalogo2" tabindex="-1" role="dialog" aria-labelledby="myModalUnete">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content well">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	<span aria-hidden="true">&times;</span>
				        </button>

				        <!--Titulo de la ventana-->
				        <h3 class="modal-title text-center" id="myModalUnete">Ubicaciones</h3>
				      </div>

				      <!--Formulario de inicio de sesión-->


				      <div class="modal-body">
				        <div class="container-fluid">
				   		 		<?php $this->widget('zii.widgets.CMenu',array(
                        		    'htmlOptions' => array('class'=>'nav nav-pills nav-stacked', 'aria-labelledby'=>'dLabel'),
                        		    'items'=>array(
                        			array('label'=>' Barrios', 'url'=>array('/barrio/'), 'linkOptions'=> array('class' => '')),
                        			array('label'=>' Municipios', 'url'=>array('/municipio/'), 'linkOptions'=> array('class' => ''))
                        			)
                        		)); ?>

				   		 	</ul>
				        </div>
				      </div>

						<div class="modal-footer">

					 	</div>
				    </div>
				  </div>
				</div>
<?php /*********************************************************************************/?>
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

<?php /*<div class="row">
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
</div>  */?>