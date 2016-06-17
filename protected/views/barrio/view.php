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
            		<div class="panel panel-info col-xs-12 col-sm-1">
                		<div class="panel-heading text-center"><h4>Barrios</h4></div>
        		            <div class="panel-body">

        		  <?php /*******************CONTENIDO*******************/ ?>



        <?php
            $this->breadcrumbs=array(
            	'Barrios'=>array('index'),
            	$model->idbarrio,
            );

            $this->menu=array(
            	array('label'=>'List Barrio', 'url'=>array('index')),
            	array('label'=>'Create Barrio', 'url'=>array('create')),
            	array('label'=>'Update Barrio', 'url'=>array('update', 'id'=>$model->idbarrio)),
            	array('label'=>'Delete Barrio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idbarrio),'confirm'=>'Are you sure you want to delete this item?')),
            	array('label'=>'Manage Barrio', 'url'=>array('admin')),
            );
            ?>

        <h1>Barrio #<?php echo $model->idbarrio; ?></h1>

        <?php $this->widget('zii.widgets.CDetailView', array(
        	'data'=>$model,
        	'attributes'=>array(
        		'idbarrio',
        		'idmunicipio',
        		'nombre',
        		'latlonne',
        		'latlonso',
        	),
        )); ?>

            </div>
		  </div>
        </div>
	  </div>
    </div>
