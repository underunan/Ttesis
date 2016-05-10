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
<?php $this->renderPartial('_form', array('model'=>$model, 'model_imagen'=>$model_imagen)); ?>

</div>