<?php
/* @var $this Producto2Controller */
/* @var $model Producto2 */

$this->breadcrumbs=array(
	'Producto2s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Producto2', 'url'=>array('index')),
	array('label'=>'Manage Producto2', 'url'=>array('admin')),
);
?>

<h1>Create Producto2</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>