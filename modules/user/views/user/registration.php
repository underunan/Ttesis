<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registration");?>
<?php /*$this->breadcrumbs=array(UserModule::t("Registration"),);*/?> 


    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/fonts/icommon-free/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">
	
	
<div>
	<div class="jumbotron">
		<div class="container">
			<h1><?php echo UserModule::t("Registro Gratis");?></h1>
			<p>Una vez que te registres, podrás empezar a anunciar o promocionar tus articulos a vender, completamente gratis.</p>

		<div class="panel panel-info col-xs-12 col-sm-6">
		<div class="panel-heading text-center"><h4>Crear nueva cuenta</h4></div>
		  <div class="panel-body">
	 
<?php if(Yii::app()->user->hasFlash('registration')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('registration'); ?>
</div>
<?php else: ?>

<div class="form">
<?php  $form=$this->beginWidget('UActiveForm', array(
	'id'=>'registration-form',
	'enableAjaxValidation'=>true,
	'disableAjaxValidationAttributes'=>array('RegistrationForm_verifyCode'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
));  ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	<?php echo $form->errorSummary(array($model,$profile)); ?>
<?php /***********************+++++FORM++++*********************/?>
	<form class="form-horizontal formulario-horizontal">
		<div class="form-group form-group">
					<div class="col-xs-12">
						<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
							
                        	<?php echo $form->textField($model,'username',array('class'=>'form-control', 'placeholder'=>'Nombre de usuario *')); ?>
                        	<?php echo $form->error($model,'username'); ?>
                        	
						</div>
					</div>
		</div>

		<div class="form-group form-group">
					<div class="col-xs-12">
						<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
						
							
                        	<?php echo $form->passwordField($model,'password', array('class'=>'form-control', 'placeholder'=>'Clave *')); ?>
                        	<?php echo $form->error($model,'password'); ?>
        					
						</div>
					</div>
		</div>

		<div class="form-group form-group">
					<div class="col-xs-12">
						<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
		                	
							<?php echo $form->passwordField($model,'verifyPassword', array('class'=>'form-control','placeholder'=>'Confirmar clave *')); ?>
                        	<?php echo $form->error($model,'verifyPassword'); ?>
							
						</div>
						<p class="hint">
                            	<?php echo UserModule::t("4 caracteres minimo"); ?>
                            	</p>
					</div>
		</div>

			<div class="form-group form-group">
					<div class="col-xs-12">
						<div class="input-group">
							<div class="input-group-addon"><span>@</span></div>
							
							<?php echo $form->textField($model,'email', array('class'=>'form-control','placeholder'=>'Correo *')); ?>
	                        <?php echo $form->error($model,'email'); ?>
						</div>
					</div>
			</div>
	
	

<?php 
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>
			

		<div class="form-group form-group">
					<div class="col-xs-12">
						<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
							
							<?php echo $form->labelEx($profile,$field->varname); ?>
                    		<?php 
                    		if ($widgetEdit = $field->widgetEdit($profile)) {
                    			echo $widgetEdit;
                    		} elseif ($field->range) {
                    			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
                    		} elseif ($field->field_type=="TEXT") {
                    			echo $form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
                    		} else {
                    			echo $form->textField($profile,$field->varname,array('size'=>50,'maxlength'=>(($field->field_size)?$field->field_size:255)));
                    		}
                    		 ?>
                    		<?php echo $form->error($profile,$field->varname); ?>
							
						</div>
					</div>
		</div>
		
			
	
			<?php
			}
		}
?>


    
	
	<?php if (UserModule::doCaptcha('registration')): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		<?php echo $form->error($model,'verifyCode'); ?>
		
		<p class="hint"><?php echo UserModule::t("Introduce los caracteres que ves en la imagen"); ?>
		<br/><?php echo UserModule::t("Letters are not case-sensitive."); ?></p>
	</div>
	<?php endif; ?>
	
	<div class="col-sm-4">

		<?php echo CHtml::submitButton(UserModule::t("Register"), array('class'=>'btn btn-success btn-lg')); ?>
		
	</div>

</form>
<?php /***********************+++++FORM++++*********************/?>

<?php $this->endWidget(); ?>
</div><!-- form -->

</div>
</div>
</div>
</div>
<?php endif; ?>