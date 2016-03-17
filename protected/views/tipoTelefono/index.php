<?php
/* @var $this TipoTelefonoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Telefonos',
);

$this->menu=array(
	array('label'=>'Create TipoTelefono', 'url'=>array('create')),
	array('label'=>'Manage TipoTelefono', 'url'=>array('admin')),
);
?>

<h1>Tipo Telefonos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
