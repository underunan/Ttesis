<?php
/* @var $this Producto2Controller */
/* @var $model Producto2 */

$this->breadcrumbs=array(
	'Producto2s'=>array('index'),
	$model->idproducto,
);

$this->menu=array(
	array('label'=>'List Producto2', 'url'=>array('index')),
	array('label'=>'Create Producto2', 'url'=>array('create')),
	array('label'=>'Update Producto2', 'url'=>array('update', 'id'=>$model->idproducto)),
	array('label'=>'Delete Producto2', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idproducto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Producto2', 'url'=>array('admin')),
);
?>

<h1>View Producto2 #<?php echo $model->idproducto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idproducto',
		'idusuario',
		'idcategoria',
		'idmoneda',
		'idestado_fisico',
		'idbarrio',
		'nombre',
		'precio',
		'descripcion',
		'fecha_publicacion',
		'direccion',
	),
)); ?>
