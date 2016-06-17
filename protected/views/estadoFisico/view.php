<?php
/* @var $this EstadoFisicoController */
/* @var $model EstadoFisico */

$this->breadcrumbs=array(
	'Estado Fisicos'=>array('index'),
	$model->idestado_fisico,
);

$this->menu=array(
	array('label'=>'List EstadoFisico', 'url'=>array('index')),
	array('label'=>'Create EstadoFisico', 'url'=>array('create')),
	array('label'=>'Update EstadoFisico', 'url'=>array('update', 'id'=>$model->idestado_fisico)),
	array('label'=>'Delete EstadoFisico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idestado_fisico),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstadoFisico', 'url'=>array('admin')),
);
?>

<h1>EstadoFisico #<?php echo $model->idestado_fisico; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idestado_fisico',
		'estado_fisico',
	),
)); ?>
