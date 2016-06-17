<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/fonts/icommon-free/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">


        <div>
        	<div class="jumbotron">
        		<div class="container">
        		<div class="panel panel-info col-xs-12 col-sm-12">
        		<div class="panel-heading text-center"><h4>Estado Fisico</h4></div>
        		  <div class="panel-body">
<?php
/* @var $this EstadoFisicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estado Fisicos',
);

$this->menu=array(
	array('label'=>'Create EstadoFisico', 'url'=>array('create')),
	array('label'=>'Manage EstadoFisico', 'url'=>array('admin')),
);
?>

<h1>Estado Fisicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
	                  </div>
        		   </div>
        	    </div>
        	</div>
        </div>