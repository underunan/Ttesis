<?php
/* @var $this TipoTelefonoController */
/* @var $model TipoTelefono */

$this->breadcrumbs=array(
	'Tipo Telefonos'=>array('index'),
	$model->idtipo_telefono=>array('view','id'=>$model->idtipo_telefono),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoTelefono', 'url'=>array('index')),
	array('label'=>'Create TipoTelefono', 'url'=>array('create')),
	array('label'=>'View TipoTelefono', 'url'=>array('view', 'id'=>$model->idtipo_telefono)),
	array('label'=>'Manage TipoTelefono', 'url'=>array('admin')),
);
?>

<h1>Update TipoTelefono <?php echo $model->idtipo_telefono; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>