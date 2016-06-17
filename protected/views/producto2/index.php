<link rel="stylesheet" href="css/style_search_v2.css">
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

                        <?php $form=$this->beginWidget('CActiveForm', array(
                        	'action'=>Yii::app()->createUrl($this->route),
                        	'method'=>'get',
                        )); ?>


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
								<input type="text" class="form-control input-md input-txt" placeholder="Articulo a buscar" name="articulo" onkeyUp="javascript:this.value=this.value.toUpperCase();" onkeyDown="transpName(this.value)" style="text-transform:uppercase;">
								<script type="text/javascript">function transpName(Thisvalue){document.getElementById("Producto_nombre").value = Thisvalue;}</script>
								<?php echo $form->hiddenField($model,'nombre',array('size'=>30,'maxlength'=>30, 'style'=>'text-transform:uppercase;' )); ?>
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
								<label for="form-group" class="col-sm-2 col-xs-12 control-label">Estado Fisico</label>
								<div class="input-group col-sm-3">

									<label class="btn btn-success"><input type="radio" onClick="up1()" name="gender" value="1" id="l1"> New</label>
									<label class="btn btn-success"><input type="radio" onClick="up2()" name="gender" value="2" id="l2"> use</label>
                                    <?php echo $form->hiddenField($model,'idestado_fisico'); ?>

								</div>
								<label for="form-group" class="col-sm-2 col-xs-12 control-label">Moneda</label>
								<div class="input-group col-sm-3">

									<label class="btn btn-success"><input type="radio" onClick="up3()" name="gender2" value="1" id="l3">C$</label>
									<label class="btn btn-success"><input type="radio" onClick="up4()" name="gender2" value="2" id="l4">U$</label>
                                    <?php echo $form->hiddenField($model,'idmoneda'); ?>

								</div>
							</div>
						</div>
						<!--Fin de filtro de busqueda-->
						<div class="form-group">
							<button class="col-sm-6 col-xs-12 bnt btn-danger btn-lg btn-buscar" type="submit"><span class="glyphicon glyphicon-search"></span>Buscar</button>
						</div>
						<div class="form-group">
							<a class="col-sm-6 col-xs-12 btn btn-info btn-lg btn-filtro" data-parent="form" data-toggle="collapse" data-target="#filtro" aria-expanded="true" aria-controls="filtro"><span class="glyphicon glyphicon-menu-down"></span> Más filtro</a>
						</div>
					</form>
				</div>
			</div>
<?php $this->endWidget(); ?>

			<!--Resultados de busquedas-->




			<div class="resultados">
				<div class="row">

					<article class="col-sm-12">
    					<div class="cards">
                            <?php $this->widget('zii.widgets.CListView', array(
                            	'id'=>'producto-grid',
                            	'dataProvider'=>$model->search(),
                            	'itemView'=>'_view',
                                'ajaxUpdate'=>false,
                            ));

                            ?>
                        </div>
					</article>

					</div>
				</div>
			</div>
		</div>
	</section>







<!--<script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?callback=inicializar&key=AIzaSyAzfZm59iFzSPrwsc781ByiEsKl4aeuZow" async defer>
</script>-->

<!--
<script type="text/javascript" src="js/map_script.js"></script>
-->
<script language='javascript'>
function up1(){var le1 = document.getElementById("l1").value;document.getElementById("Producto_idestado_fisico").value = le1;}
function up2(){var le1 = document.getElementById("l2").value;document.getElementById("Producto_idestado_fisico").value = le1;}
function up3(){var le1 = document.getElementById("l3").value;document.getElementById("Producto_idmoneda").value = le1;}
function up4(){var le1 = document.getElementById("l4").value;document.getElementById("Producto_idmoneda").value = le1;}
</script>


<?php
  	#sacamos los datos del modelo del controlador SiteController
	$data = array();

foreach ($model2 as $dato) {
	$data[] = array('lat'=>$dato->latlonne,'long'=>$dato->latlonso);
	}
	//codificamos a json
	$json_string = json_encode($data);
?>


<script type="text/javascript">

function load() {
var map = new google.maps.Map(document.getElementById("map-canvas"), {
    center: new google.maps.LatLng(12.419682877577497,-86.87478992462161),
      zoom: 14,
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