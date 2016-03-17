<?php
/* @var $this TipoTelefonoController */
/* @var $model TipoTelefono */

$this->breadcrumbs=array(
	'Tipo Telefonos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoTelefono', 'url'=>array('index')),
	array('label'=>'Manage TipoTelefono', 'url'=>array('admin')),
);
?>

<h1>Create TipoTelefono</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>