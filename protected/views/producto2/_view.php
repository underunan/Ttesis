<?php
/* @var $this Producto2Controller */
/* @var $data Producto2 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproducto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproducto), array('view', 'id'=>$data->idproducto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->idusuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategoria')); ?>:</b>
	<?php echo CHtml::encode($data->idcategoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmoneda')); ?>:</b>
	<?php echo CHtml::encode($data->idmoneda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idestado_fisico')); ?>:</b>
	<?php echo CHtml::encode($data->idestado_fisico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbarrio')); ?>:</b>
	<?php echo CHtml::encode($data->idbarrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_publicacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_publicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

</div>