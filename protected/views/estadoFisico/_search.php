<?php
/* @var $this EstadoFisicoController */
/* @var $model EstadoFisico */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idestado_fisico'); ?>
		<?php echo $form->textField($model,'idestado_fisico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_fisico'); ?>
		<?php echo $form->textField($model,'estado_fisico'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->