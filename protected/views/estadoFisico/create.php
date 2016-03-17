<?php
/* @var $this EstadoFisicoController */
/* @var $model EstadoFisico */

$this->breadcrumbs=array(
	'Estado Fisicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstadoFisico', 'url'=>array('index')),
	array('label'=>'Manage EstadoFisico', 'url'=>array('admin')),
);
?>

<h1>Create EstadoFisico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>