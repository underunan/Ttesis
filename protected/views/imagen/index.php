<section class="container-fluid video_form">
		<div style="height:500px; width:100%;" data-vide-bg="<?php echo Yii::app()->request->baseUrl;?>/video/video.png">
		</div>

		<form class="formulario">

			<div class="input-group">
				<input type="text" class="form-control" placeholder="Lugar a buscar" href="#">
			</div>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Producto a buscar">
			</div>
			<div class="input-group">
				<butto class="bnt btn-danger btn-lg" id="bntBuscar">Buscar</button>
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

<section class="resultados container">
	<h1>EXPLORA LAS TIENDAS</h1>
	 <?php
                /* @var $this ImagenController */
                /* @var $dataProvider CActiveDataProvider */

                $this->breadcrumbs=array(
                	'Imagens',
                );

                /*$this->menu=array(
                	array('label'=>'Create Imagen', 'url'=>array('create')),
                	array('label'=>'Manage Imagen', 'url'=>array('admin')),
                );*/
                ?>
	<div class="cards">
        <?php $this->widget('zii.widgets.CListView', array(
        	'dataProvider'=>$dataProvider,
        	'itemView'=>'_view',
        	));
        ?>
	</div>
</section>

