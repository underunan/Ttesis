<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
/* @var $form CActiveForm */
?>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'municipio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

		<form class="form-horizontal formulario-horizontal">
		<div class="form-group form-group">
					<div class="col-xs-12">
						<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>

                    		<?php echo $form->textField($model,'nombre',array('class'=>'form-control', 'placeholder'=>'Nombre del municipio *'),array('size'=>30,'maxlength'=>30)); ?>
                    		<?php echo $form->error($model,'nombre'); ?>


                    		<?php echo $form->textField($model,'latlonne' ,array('class'=>'form-control', 'placeholder'=>'Latitud Norte *')); ?>
                    		<?php echo $form->error($model,'latlonne'); ?>

                    		<?php echo $form->textField($model,'latlonso' ,array('class'=>'form-control', 'placeholder'=>'Longitud Sur *')); ?>
                    		<?php echo $form->error($model,'latlonso'); ?>

						</div>
					</div>
		</div>

		    <div class="col-sm-4">

		    <?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar' , array('class'=>'btn btn-success btn-lg')); ?>

	        </div>





	</form>
<?php $this->endWidget(); ?>





































	<!--div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latlonne'); ?>
		<?php echo $form->textField($model,'latlonne'); ?>
		<?php echo $form->error($model,'latlonne'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latlonso'); ?>
		<?php echo $form->textField($model,'latlonso'); ?>
		<?php echo $form->error($model,'latlonso'); ?>
	</div>

	<div class="row buttons">

	</div-->

