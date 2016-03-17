<?php
/* @var $this Producto2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Producto2s',
);

$this->menu=array(
	array('label'=>'Create Producto2', 'url'=>array('create')),
	array('label'=>'Manage Producto2', 'url'=>array('admin')),
);
?>

<h1>Producto2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
