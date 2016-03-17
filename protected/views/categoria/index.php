<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css">
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/fonts/icommon-free/style.css">
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">
        	
        	
        <div>
        	<div class="jumbotron">
        		<div class="container">
        			<h1><?php echo UserModule::t("MUNICIPIO");?></h1>
        		<div class="panel panel-info col-xs-12 col-sm-12">
        		
        		<div class="panel-heading text-center"><h4>Categorias</h4></div>
        		  <div class="panel-body">
        		  
<?php
/* @var $this CategoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categorias',
);

$this->menu=array(
	array('label'=>'Crear Categoria', 'url'=>array('create')),
	array('label'=>'Administrar Categoria', 'url'=>array('admin')),
);
?>

<h1>Categorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
	    </div>
        		  </div>
        		</div>
        	</div>
        </div>

