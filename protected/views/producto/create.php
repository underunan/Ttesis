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
        		<div class="panel panel-info col-xs-12 col-sm-12">

        		  <div class="panel-body">

        		  <?php /*******************CONTENIDO*******************/ ?>



<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">
<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Producto', 'url'=>array('index')),
	array('label'=>'Manage Producto', 'url'=>array('admin')),
);
?>

<div class="panel panel-default info-usuario update">
  <div class="panel-heading">
        <h4 class="text-center"><i class="glyphicon glyphicon-pencil pull-left" style="color: #428bca; font-size:30px;"></i> Agregar producto <a href="?r=producto/admin" class="btn btn-primary pull-right">Gestión de productos</a></h4>
  </div>

<?php //$this->renderPartial('_form', array('model'=>$model)); ?>
<?php //$this->renderPartial('_form', array('model'=>$model, 'model_imagen'=>$model_imagen)); ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>





	<?php
		$lat = "12.419682877577497";
    	$lng = "-86.87478992462161";
    	$pos = "42.822410654302125,-1.6459033203125273";
	 ?>

	<div id='googleMap'></div>

	<div class="row">
      <div id="respuesta">
      </div>


</div>
</div>



<script type="text/javascript">
'use strict'
$(document).ready(function(){
	var lat = "<?php echo $lat; ?>" ;
    var lng = "<?php echo $lng; ?>" ;
    var map;

	function initialize() {

    var myLatlng = new google.maps.LatLng(lat,lng);
    var mapOptions = {
        zoom: 13,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
       map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          draggable:true,
          animation: google.maps.Animation.DROP,
          web:"Localización geográfica!",
        });
        google.maps.event.addListener(marker, 'dragend', function(event) {
          var myLatLng = event.latLng;
          lat = myLatLng.lat();
          lng = myLatLng.lng();


          document.getElementById('Producto_latlonne').value = lat;
          document.getElementById('Producto_latlonso').value = lng;


        });
        marker.setMap(map);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
        $("#enviar").click(function() {
        //$("#respuesta").html('<img src="cargando.gif" />');
        $.ajax({
         type: "POST",
         url: "?r=site/regmap",
         data: {'lat': lat,'long': lng},
         success: function(data)
         {
           $("#respuesta")
           	.attr({class:'alert alert-success col-sm-5'})
           	.html(data);
         },
         error: function(){
         	console.log("Ocurrio un error...!!!");
         }
       });
      });
});


</script>