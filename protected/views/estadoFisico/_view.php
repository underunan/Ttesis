<?php
/* @var $this EstadoFisicoController */
/* @var $data EstadoFisico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idestado_fisico')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idestado_fisico), array('view', 'id'=>$data->idestado_fisico)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_fisico')); ?>:</b>
	<?php echo CHtml::encode($data->estado_fisico); ?>
	<br />


</div>