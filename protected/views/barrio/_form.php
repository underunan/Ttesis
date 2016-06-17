<?php
/* @var $this BarrioController */
/* @var $model Barrio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barrio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

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

		    <?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar' , array('class'=>'btn btn-success btn-lg')); ?>

	        </div>
                    		</form>





<?php $this->endWidget(); ?>

