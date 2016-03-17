<?php
/* @var $this TipoTelefonoController */
/* @var $data TipoTelefono */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipo_telefono')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtipo_telefono), array('view', 'id'=>$data->idtipo_telefono)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linea')); ?>:</b>
	<?php echo CHtml::encode($data->linea); ?>
	<br />


</div>