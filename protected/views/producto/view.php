<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">


<?php
/* @var $this ImagenController */
/* @var $model Imagen */

$this->menu=array(
	array('label'=>'Ir a inicio', 'url'=>array('index')),
	array('label'=>'Agrega un producto', 'url'=>array('producto/create')),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idproducto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Imagen', 'url'=>array('admin')),
);
?>

<?php /************************************************************************/?>

<link rel="stylesheet" type="text/css" href="css/style_busqueda_item.css">
<br/><br/><br/>
<?php
$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	$model->idproducto,
);
?>
	<section class="container">
		<div class="row">
			<div class="barra-izquierda col-sm-5">

	<?php /*$SQL = "select GetImgCode(" .CHtml::encode($model->idproducto).")";?>
	<?php $findMAX = Yii::app()->db->createCommand( $SQL )->queryRow();*/?>

            	<figure class="thumbnail">
            	<img src="data:image/jpeg;base64,<?php echo CHtml::encode($model->imagen); ?>" class="img-responsive img-thumbnail" alt="silla playera">
				</figure>

			</div>
			<div class="barra-derecha col-sm-7 col-xs-12">
				<div class="barra-titulo row">
					<h3 class="col-sm-12"><?php echo CHtml::encode($model->nombre); ?></h3>
					<div class="item-votacion col-sm-2">
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					<span class="glyphicon glyphicon-star"></span>
					</div>
					<!--p class="col-sm-10 text-left"><em>Este producto tiene 20 visitas</em></p-->
				</div>
				<div class="barra-detalle row">
					<div class="item-detalle col-sm-12">
						<p class="item-codigo"><span>Codigo producto: </span> <?php echo CHtml::encode($model->idproducto); ?></p>
						<p class="item-marca"><span>Estado del producto: </span>  <?php $estado = '0'; if(CHtml::encode($model->idestado_fisico)== 1){$estado = 'nuevo';}else{$estado = 'usado' ; } echo $estado;?>	</p>

                        <p class="item-codigo"><span>Fecha de publicacion: </span> <?php echo CHtml::encode($model->fecha_publicacion); ?></p>
                        <p class="item-codigo"><span>Direccion: </span> <?php echo CHtml::encode($model->direccion); ?></p>
                        <p class="item-codigo"><span>Publicado por: </span>
                        <?php echo CHtml::encode($model->idusuario0->profiles->firstname);?>
                        <?php echo CHtml::encode($model->idusuario0->profiles->lastname); ?></p>

                        <p class="item-codigo"><span>Telefono: </span>
                        <?php echo CHtml::encode($model->idusuario0->profiles->cellphone);?>
                        <?php echo CHtml::encode($model->idusuario0->profiles->linea); ?></p>
                        <br />

					</div>
					<div class="item-descripcion col-sm-12">
					<p class="item-codigo"><span>Descripcion: </span> <?php echo CHtml::encode($model->descripcion); ?></p>
					</div>
				</div>

				<div class="barra-precio-compartir row">
					<div class="item-precio col-sm-4">


                         <?php $moneda = '0'; if(CHtml::encode($model->idmoneda0->moneda)=='cordobas'){$moneda = 'C$';}else{$moneda = 'U$';} ?>
						<!--span class="badge pull-right"><s>$250</s></span-->
						<div class="text-right"><?php echo CHtml::encode($model->precio); echo " ".$moneda;?></div>

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
		<?php /************************************************************************/?>

	</section>
	<section class="aside">
		<div id="mapa" class="" style="width: 100%; height: 350px;">
         </div>
	</section>




	<script type="text/javascript">

function load() {
console.log("hola desde javscript");

       var data_3 = "'<?php echo CHtml::encode($model->latlonne); ?>'" ;
       var data_4 = "'<?php echo CHtml::encode($model->latlonso); ?>'";
    var lat0 = JSON.parse(data_3.substring(1,data_3.length-1));
        var lon0 = JSON.parse(data_4.substring(1,data_4.length-1));
    var map = new google.maps.Map(document.getElementById('mapa'), {
      center: new google.maps.LatLng(lat0,lon0),
      zoom: 14,
      mapTypeId: 'roadmap'
    });
   //pasamos el json a string
 var data_1 = "'<?php echo CHtml::encode($model->latlonne); ?>'" ;
 var data_2 = "'<?php echo CHtml::encode($model->latlonso); ?>'";
  var lat = JSON.parse(data_1.substring(1,data_1.length-1));
  var lon = JSON.parse(data_2.substring(1,data_2.length-1));
	//deshacemos las comillas dobles que nos aparecen al convertirlo en json con php
              var point = new google.maps.LatLng(
              parseFloat(lat),
              parseFloat(lon)
           	);
    	var marker = new google.maps.Marker({
          map: map,
          position: point
        });
 }
  google.maps.event.addDomListener(window, 'load', load);
 </script>

