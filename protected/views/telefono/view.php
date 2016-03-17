<?php
/* @var $this TelefonoController */
/* @var $model Telefono */

$this->breadcrumbs=array(
	'Telefonos'=>array('index'),
	$model->telefono,
);

$this->menu=array(
	array('label'=>'List Telefono', 'url'=>array('index')),
	array('label'=>'Create Telefono', 'url'=>array('create')),
	array('label'=>'Update Telefono', 'url'=>array('update', 'id'=>$model->telefono)),
	array('label'=>'Delete Telefono', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->telefono),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Telefono', 'url'=>array('admin')),
);
?>

<h1>View Telefono #<?php echo $model->telefono; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'telefono',
		'idusuario',
		'idtipo_telefono',
	),
)); ?>
