<?php
/* @var $this Producto2Controller */
/* @var $model Producto2 */

$this->breadcrumbs=array(
	'Producto2s'=>array('index'),
	$model->idproducto=>array('view','id'=>$model->idproducto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Producto2', 'url'=>array('index')),
	array('label'=>'Create Producto2', 'url'=>array('create')),
	array('label'=>'View Producto2', 'url'=>array('view', 'id'=>$model->idproducto)),
	array('label'=>'Manage Producto2', 'url'=>array('admin')),
);
?>

<h1>Update Producto2 <?php echo $model->idproducto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>