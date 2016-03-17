
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css">
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/fonts/icommon-free/style.css">
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">

        		<style type="text/css">
		body {
		background: #cccccc;
		}
		#info {
			font-size: 18px;
			background: #ffffff;
			width: 450px;
			border-radius: 6px;
			text-align: center;
			color: #666666;
			border: solid 1px #666666;
			margin: auto;
			padding: 3px;

		}
		#respuesta {
			margin: auto 60px;
		}
		#googleMap {
			margin: 10px auto;
			border: 2px solid #666666;
			border-radius: 6px;
			width:90%;
			height:250px;
		}
		#map {
			margin: 10px auto;
			width:100%;
			height:280px;
			border: 2px solid #666666;
			border-radius: 6px;
		}
	</style>

        <div>
        	<div class="jumbotron">
        		<div class="container">
        			<h1><?php echo UserModule::t("BARRIOS");?></h1>
        		<div class="panel panel-info col-xs-12 col-sm-offset-0">
        		<div class="panel-heading text-center"><h4>Barrios</h4></div>
        		  <div class="panel-body">

        		  <?php /*******************CONTENIDO*******************/ ?>



        <?php
/* @var $this BarrioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Barrios',
);

$this->menu=array(
	array('label'=>'Create Barrio', 'url'=>array('create')),
	array('label'=>'Manage Barrio', 'url'=>array('admin')),
);
?>



<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,

	'itemView'=>'_view',
)); ?>

  </div>
        	    </div>
	        </div>
        </div>
          </div>

<div class="jumbotron">
	<?php/*
		$lat = "12.419682877577497";
    	$lng = "-86.87478992462161";
    	$pos = "42.822410654302125,-1.6459033203125273";*/
	 ?>
	<!--div id='info'><?php /*echo $pos;*/ ?></div-->
	<div id='googleMap'></div>
	<!--div class="row">
		<button type="submit" id='enviar' class='btn btn-danger col-sm-3 col-sm-offset-1'>Guardar</button>
		<a href="<?php echo Yii::app()->request->baseUrl;?>?r=/site/rutas" class="btn btn-warning col-sm-3 col-sm-offset-1">Mostrar puntos</a>
	</div-->
	<div class="row">
      <div id="respuesta">
      </div>
	</div>

</div>

		  <?php
  	#sacamos los datos del modelo del controlador SiteController
	$data = array();
	foreach ($model as $dato) {
		$data[] = array('lat'=>$dato->latlonne,'long'=>$dato->latlonso);
	}

	//codificamos a json
	$json_string = json_encode($data);
?>
<script type="text/javascript">

function load() {
    var map = new google.maps.Map(document.getElementById("googleMap"), {
      center: new google.maps.LatLng(12.419682877577497,-86.87478992462161),
      zoom: 12,
      mapTypeId: 'roadmap'
    });
   //pasamos el obj json a string
	var data = '"<?php echo $json_string; ?>"';

	//deshacemos las comillas dobles que nos aparecen al convertirlo en json con php
	data = JSON.parse(data.substring(1,data.length-1));
	console.log(data);
	for(punto in data){
		//puntos a mostrar en el mapa
		var point = new google.maps.LatLng(
              parseFloat(data[punto].lat),
              parseFloat(data[punto].long)
           	);
    	var marker = new google.maps.Marker({
          map: map,
          position: point
        });
	}
 }
  google.maps.event.addDomListener(window, 'load', load);
 </script>