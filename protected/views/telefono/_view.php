<?php
/* @var $this TelefonoController */
/* @var $data Telefono */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->telefono), array('view', 'id'=>$data->telefono)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->idusuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipo_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->idtipo_telefono); ?>
	<br />


</div>