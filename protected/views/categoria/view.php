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
	$model->idcategoria,
);

$this->menu=array(
	array('label'=>'Listar Categoria', 'url'=>array('index')),
	array('label'=>'Crear Categoria', 'url'=>array('create')),
	array('label'=>'Actualizar Categoria', 'url'=>array('update', 'id'=>$model->idcategoria)),
	array('label'=>'Borrar Categoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcategoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Categoria', 'url'=>array('admin')),
);
?>

<h1>ver #<?php echo $model->idcategoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcategoria',
		'nombre',
		'descripcion',
	),
)); ?>

	    </div>
        		  </div>
        		</div>
        	</div>
        </div>

