<?php
/* @var $this TelefonoController */
/* @var $model Telefono */

$this->breadcrumbs=array(
	'Telefonos'=>array('index'),
	$model->telefono=>array('view','id'=>$model->telefono),
	'Update',
);

$this->menu=array(
	array('label'=>'List Telefono', 'url'=>array('index')),
	array('label'=>'Create Telefono', 'url'=>array('create')),
	array('label'=>'View Telefono', 'url'=>array('view', 'id'=>$model->telefono)),
	array('label'=>'Manage Telefono', 'url'=>array('admin')),
);
?>

<h1>Update Telefono <?php echo $model->telefono; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>