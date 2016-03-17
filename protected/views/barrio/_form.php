<?php
/* @var $this BarrioController */
/* @var $model Barrio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barrio-form',
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
                                        		

                                        		<?php echo $form->dropDownList($model,'idmunicipio', CHtml::listData(Municipio::model()->findAll(array('order' => 'idmunicipio')),'idmunicipio','nombre' ));?>
                                        		<?php echo $form->error($model,'idmunicipio'); ?>
                                        		<input id="Tipo" name="Tipo" type="hidden" value=" ">
                                        		
                                        		<?php echo $form->textField($model,'nombre',array('class'=>'form-control', 'placeholder'=>'Nombre del Barrio *'), array('size'=>30,'maxlength'=>30)); ?>
                                        		<?php echo $form->error($model,'nombre'); ?>
                                        		
                                        		
                                        		<?php echo $form->textField($model,'latlonne',array('class'=>'form-control', 'placeholder'=>'Lat Nor *')); ?>
                                        		<?php echo $form->error($model,'latlonne'); ?>
                                        		
                                        		
                                        		<?php echo $form->textField($model,'latlonso',array('class'=>'form-control', 'placeholder'=>'Long Est *')); ?>
                                        		<?php echo $form->error($model,'latlonso'); ?>
                    						</div>
                    					</div>
                    		</div>
                    		
                    			<div class="col-sm-4">

		    <?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar' , array('class'=>'btn btn-success btn-lg')); ?>
		
	        </div>
                    		</form>
                    		
                    		
		
                    		

<?php $this->endWidget(); ?>

</div><!-- form -->