<?php
/* @var $this TelefonoController */
/* @var $model Telefono */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idusuario'); ?>
		<?php echo $form->textField($model,'idusuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idtipo_telefono'); ?>
		<?php echo $form->textField($model,'idtipo_telefono'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->