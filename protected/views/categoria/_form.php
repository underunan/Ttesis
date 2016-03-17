<?php
/* @var $this CategoriaController */
/* @var $model Categoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categoria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
		<form class="form-horizontal formulario-horizontal">
                    		<div class="form-group form-group">
                    					<div class="col-xs-12">
                    						<div class="input-group">
                    							<div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>

                                        		<?php echo $form->textField($model,'nombre',array('class'=>'form-control', 'placeholder'=>'nombre *'),array('size'=>35,'maxlength'=>35)); ?>
                                        		<?php echo $form->error($model,'nombre'); ?>
                                        	
                                        		<?php echo $form->textArea($model,'descripcion',array('class'=>'form-control', 'placeholder'=>'descripcion *'),array('rows'=>6, 'cols'=>50)); ?>
                                        		<?php echo $form->error($model,'descripcion'); ?>
                                        

                    						</div>
                    					</div>
                    		</div>
                    		
                    			<div class="col-sm-4">

		    <?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar' , array('class'=>'btn btn-success btn-lg')); ?>
		
	        </div>
        </form>

	

<?php $this->endWidget(); ?>

</div><!-- form -->