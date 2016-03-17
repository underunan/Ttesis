<?php
/* @var $this EstadoFisicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estado Fisicos',
);

$this->menu=array(
	array('label'=>'Create EstadoFisico', 'url'=>array('create')),
	array('label'=>'Manage EstadoFisico', 'url'=>array('admin')),
);
?>

<h1>Estado Fisicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
