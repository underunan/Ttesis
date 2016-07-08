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
								<!--input type="text" class="form-control input-md input-txt" placeholder="Lugar a buscar" name="lugar"-->

										<?php echo $form->dropDownList($model,'idbarrio',
		CHtml::listData(Barrio::model()->findAll(array('order' => 'idbarrio')),'idbarrio','nombre'),array('class'=>'form-control', 'value'=>''));?>


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

                            <script type="text/javascript">
                            	$(document).ready(function()
                            		{
                            		$('#precio1').change(function() {
                            		$('#Producto_precio').val($(this).val());
                            		});
                            	});
                  </script>

                  <div class="form-group">
							<label for="form-group" class="col-sm-4 col-xs-12 control-label">Especifica un margen de precio:</label>
							<div class="input-group col-sm-3">


                                <!--<div id="slider-range"></div>-->


                                <p id="amount" class="label label-danger"></p>
                                <input type="hidden" id="amount1">
                                <input type="hidden" id="amount2">
                               <br><br>




                               <!-- SLIDE SENCILLO-->
                            <?php
                           $this->widget('zii.widgets.jui.CJuiSlider',array(
                            // additional javascript options for the slider plugin
                            'id'=>'slider-range2',
                            'options'=>array(
                            ),
                            'htmlOptions'=>array(
                                'style'=>'height:12px;',
                            ),
                        ));
                    ?>

                    <p id="amt" class="label label-danger"></p><p id="amount_2" class="label label-danger"></p>
                    <input name="Producto[precio]" type="hidden" id="amount_v2">

							</div>
					</div>

<!--
                            <div class="form-group">
								<label for="form-group" class="col-sm-2 col-xs-12 control-label">Especifica un margen de precio:</label>
								<div class="input-group col-sm-3">
                                <p>_____________<input id="precio1" type="range" name="precio1" min="2" max="2000" step="1" value="40" style="width: 100%;">2000 o mas</p>
								</div>
							</div>

							-->
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


					<article class="">
    					<div class="cards">
    					<?php for ($i = 0; $i <= count($model2)-1;$i++) { ?>

<?php


    $idestado = CHtml::encode($model2[$i]->idestado_fisico);
    $estado = 'nan';
    if($idestado == 2){
        $estado = 'usado';
    }
    else{
    $estado = 'nuevo';

}?>

<div class="card well <?php echo $estado; ?> card--loaded" >
								<h4><span class="label label-primary pull-left"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $estado?></span></h4>




			<img src="data:image/jpeg;base64,<?php echo CHtml::encode($model2[$i]->imagen); ?>" style="height:auto" alt="zapatos" class="img-responsive">

								<div class="caption">
									<h3 class="text-center">
									<?php echo CHtml::encode($model2[$i]->nombre); ?></h3>
									<?php
									$idmoneda = CHtml::encode($model2[$i]->idmoneda);
									$moneda = 'nan';
                if($idmoneda == 2){$moneda = 'U$';}else{$moneda = 'C$';} ?>
									<span class="glyphicon glyphicon-tags">
									    <?php
									        echo $moneda."".CHtml::encode($model2[$i]->precio);
                                        ?>
									</span>
									<div class="badge pull-right item-fecha">
										<span class="glyphicon glyphicon-time"></span>
										<span>Publicado <?php echo CHtml::encode($model2[$i]->fecha_publicacion); ?></span>
									</div>

								</div>
								<p>
									<?php echo CHtml::link('Ver más', array('Producto/view', 'id'=>$model2[$i]->idproducto), array('class'=>'btn btn-danger btn-lg col-sm-12 col-xs-12' )); ?>
								</p>
</div>
<?php  } ?>
                        </div>
					</article>

					</div>

				</div>
			</div>
		</div>
	</section>







<!--<script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?callback=inicializar&key=AIzaSyAzfZm59iFzSPrwsc781ByiEsKl4aeuZow" async defer>
</script>-->


<?php
  	#sacamos los datos del modelo del controlador SiteController
	$data = array();
   for ($i = 0; $i < count($model2);$i++) {
	  $data[] = array('lat'=>$model2[$i]->latlonne,'long'=>$model2[$i]->latlonso,);
	}
	//codificamos a json
	$json_string = json_encode($data);
?>

<script type="text/javascript">

$(function(){

var data = JSON.parse('<?php echo $json_string; ?>');
var opciones = {
    center: new google.maps.LatLng(12.419682877577497,-86.87478992462161),
    zoom: 14,
    mapTypeId: 'roadmap'
};

var map = new google.maps.Map(document.getElementById("map-canvas"), opciones);

$.each(data, function( index, value ) {

  var point = new google.maps.LatLng(value.lat, value.long);
  var marker = new google.maps.Marker({
      map: map,
      position: point
  });
  var infoVentana;

});
});

 </script>

 <script type="text/javascript">
//SLIDER
$(function(){
//IMPRIME DESDE EL CONTROLADOR, PARA PROBAR
console.log("Imprime desde el controlador: "+ '<?php echo $model3;?>');




//CONFIGURACION SLIDE SENCILLO
$( "#slider-range2" ).slider({
        min: 0,
        max: 2000,
        value: 100,
         slide: function( event, ui ) {
                 $( "#amount_v2" ).val( ui.value);
                 $( "#amount_2" ).html(ui.value);
                 }
             });
 $( "#amount_2" ).html( $( "#slider-range2" ).slider( "values",0));
 $( "#amount_v2" ).html($( "#slider-range2" ).slider( "values",0));
 $( "#amount_v2" ).val($( "#slider-range2" ).slider( "values",0));

});

function up1(){var le1 = document.getElementById("l1").value;document.getElementById("Producto_idestado_fisico").value = le1;}
function up2(){var le1 = document.getElementById("l2").value;document.getElementById("Producto_idestado_fisico").value = le1;}
function up3(){var le1 = document.getElementById("l3").value;document.getElementById("Producto_idmoneda").value = le1;document.getElementById("amt").innerHTML = 'C$';}
function up4(){var le1 = document.getElementById("l4").value;document.getElementById("Producto_idmoneda").value = le1;document.getElementById("amt").innerHTML = 'U$';}
</script>
