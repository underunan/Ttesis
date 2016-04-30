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


	<div class="panel panel-default info-usuario update">
  <div class="panel-heading">

        <h4 class="text-center"><i class="glyphicon glyphicon-save-file pull-left" style="color: #428bca; font-size:30px;"></i> Agregar un nuevo producto</h4>
  </div>
  <div class="panel-body">
    <div class="form-group">
        <?php echo $form->labelEx($model,'idusuario'); ?>
		<?php echo $form->textField($model,'idusuario',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'idusuario', array('class'=>'alert alert-danger')); ?>
	</div>
	<div class="form-group">
        <?php echo $form->labelEx($model,'idcategoria'); ?>
		<?php echo $form->textField($model,'idcategoria',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'idcategoria', array('class'=>'alert alert-danger')); ?>
	</div>
	<div class="form-group">
        <?php echo $form->labelEx($model,'idmoneda'); ?>
		<?php echo $form->textField($model,'idmoneda',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'idmoneda', array('class'=>'alert alert-danger')); ?>
	</div>
	<div class="form-group">
        <?php echo $form->labelEx($model,'idestado_fisico'); ?>
		<?php echo $form->textField($model,'idestado_fisico',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'idestado_fisico', array('class'=>'alert alert-danger')); ?>
	</div>
	<div class="form-group">
        <?php echo $form->labelEx($model,'idbarrio'); ?>
		<?php echo $form->textField($model,'idbarrio',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'idbarrio', array('class'=>'alert alert-danger')); ?>
	</div>
	<div class="form-group">
<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre', array('class'=>'alert alert-danger')); ?>
	</div>
	<div class="form-group">
<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'precio',array('class'=>'alert alert-danger')); ?>
	</div>
	<div class="form-group">
<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'descripcion',array('class'=>'alert alert-danger')); ?>
	</div>
	<div class="form-group">
<?php echo $form->labelEx($model,'fecha_publicacion'); ?>
		<?php echo $form->textField($model,'fecha_publicacion',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'fecha_publicacion',array('class'=>'alert alert-danger')); ?>
	</div>
	<div class="form-group">
<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'direccion',array('class'=>'alert alert-danger')); ?>
	</div>
    <p class="form-group">
    <div class="col-sm-4 hidden-xs"></div>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar',array('class'=>'btn btn-success btn-lg col-sm-4 col-xs-12')); ?>
		 <div class="col-sm-4 hidden-xs"></div>
		</p>
  </div>

  <div class="panel-footer">

  </div>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->