<?php
/* @var $this EstadoFisicoController */
/* @var $model EstadoFisico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estado-fisico-form',
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

	<div class="row">
		<?php echo $form->labelEx($model,'estado_fisico'); ?>
		<?php echo $form->textField($model,'estado_fisico', array('class'=>'form-control', 'placeholder'=>'nombre *'),array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'estado_fisico'); ?>
	</div>


                    					</div>
                    		           </div>
                            </div>
                    			<div class="col-sm-4">

		    <?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar' , array('class'=>'btn btn-success btn-lg')); ?>

	        </div>
        </form>



<?php $this->endWidget(); ?>

</div><!-- form -->