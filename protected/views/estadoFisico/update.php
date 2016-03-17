<?php
/* @var $this EstadoFisicoController */
/* @var $model EstadoFisico */

$this->breadcrumbs=array(
	'Estado Fisicos'=>array('index'),
	$model->idestado_fisico=>array('view','id'=>$model->idestado_fisico),
	'Update',
);

$this->menu=array(
	array('label'=>'List EstadoFisico', 'url'=>array('index')),
	array('label'=>'Create EstadoFisico', 'url'=>array('create')),
	array('label'=>'View EstadoFisico', 'url'=>array('view', 'id'=>$model->idestado_fisico)),
	array('label'=>'Manage EstadoFisico', 'url'=>array('admin')),
);
?>

<h1>Update EstadoFisico <?php echo $model->idestado_fisico; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>