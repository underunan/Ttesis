<?php
/* @var $this BarrioController */
/* @var $data Barrio */
?>

<div class="view">

	<!--b><?php echo CHtml::encode($data->getAttributeLabel('idbarrio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbarrio), array('view', 'id'=>$data->idbarrio)); ?>
	<br /-->

	<!--b><?php echo CHtml::encode($data->getAttributeLabel('idmunicipio')); ?>:</b>
	<?php echo CHtml::encode($data->idmunicipio); ?>
	<br /-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latlonne')); ?>:</b>
	<?php echo CHtml::encode($data->latlonne); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latlonso')); ?>:</b>
	<?php echo CHtml::encode($data->latlonso); ?>
	<br />

</div>

    <br />