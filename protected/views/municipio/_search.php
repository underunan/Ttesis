<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idmunicipio'); ?>
		<?php echo $form->textField($model,'idmunicipio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latlonne'); ?>
		<?php echo $form->textField($model,'latlonne'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latlonso'); ?>
		<?php echo $form->textField($model,'latlonso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->