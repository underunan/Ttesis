<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">
<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->idproducto=>array('view','id'=>$model->idproducto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Producto', 'url'=>array('index')),
	array('label'=>'Create Producto', 'url'=>array('create')),
	array('label'=>'View Producto', 'url'=>array('view', 'id'=>$model->idproducto)),
	array('label'=>'Manage Producto', 'url'=>array('admin')),
);
?>

<div class="panel panel-default info-usuario update">
  <div class="panel-heading">
        <h4 class="text-center"><i class="glyphicon glyphicon-edit pull-left" style="color: #428bca; font-size:30px;"></i> Editar producto <a href="?r=producto/admin" class="btn btn-danger pull-right"><i class="glyphicon glyphicon-tasks"></i> Gestiónar productos</a></h4>
  </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>