<?php
/* @var $this TipoTelefonoController */
/* @var $model TipoTelefono */

$this->breadcrumbs=array(
	'Tipo Telefonos'=>array('index'),
	$model->idtipo_telefono,
);

$this->menu=array(
	array('label'=>'List TipoTelefono', 'url'=>array('index')),
	array('label'=>'Create TipoTelefono', 'url'=>array('create')),
	array('label'=>'Update TipoTelefono', 'url'=>array('update', 'id'=>$model->idtipo_telefono)),
	array('label'=>'Delete TipoTelefono', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtipo_telefono),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoTelefono', 'url'=>array('admin')),
);
?>

<h1>View TipoTelefono #<?php echo $model->idtipo_telefono; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtipo_telefono',
		'tipo_telefono',
		'linea',
	),
)); ?>
