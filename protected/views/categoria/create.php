<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css">
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/fonts/icommon-free/style.css">
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
        	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">
        	
        	
        <div>
        	<div class="jumbotron">
        		<div class="container">
        			<h1><?php echo UserModule::t("MUNICIPIO");?></h1>
        		<div class="panel panel-info col-xs-12 col-sm-6">
        		
        		<div class="panel-heading text-center"><h4>Categorias</h4></div>
        		  <div class="panel-body">
        		  
<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Categoria', 'url'=>array('index')),
	array('label'=>'Administra Categoria', 'url'=>array('admin')),
);
?>

<h1>Crear</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	    </div>
        		  </div>
        		</div>
        	</div>
        </div>

