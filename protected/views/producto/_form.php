<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idusuario'); ?>
		<?php echo $form->textField($model,'idusuario'); ?>
		<?php echo $form->error($model,'idusuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcategoria'); ?>
		<?php echo $form->textField($model,'idcategoria'); ?>
		<?php echo $form->error($model,'idcategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idmoneda'); ?>
		<?php echo $form->textField($model,'idmoneda'); ?>
		<?php echo $form->error($model,'idmoneda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idestado_fisico'); ?>
		<?php echo $form->textField($model,'idestado_fisico'); ?>
		<?php echo $form->error($model,'idestado_fisico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idbarrio'); ?>
		<?php echo $form->textField($model,'idbarrio'); ?>
		<?php echo $form->error($model,'idbarrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion'); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_publicacion'); ?>
		<?php echo $form->textField($model,'fecha_publicacion'); ?>
		<?php echo $form->error($model,'fecha_publicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->