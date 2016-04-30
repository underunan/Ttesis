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

		<div class="panel panel-info col-xs-12 col-sm-12">
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

	<h3 class="note text-danger"><?php echo UserModule::t('Todos los campos son requeridos.'); ?></h3>
	<?php echo $form->errorSummary(array($model,$profile)); ?>
<?php /***********************+++++FORM++++*********************/?>
	<form class="form-horizontal">

        <?php
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>


		<div class="form-group col-xs-12">
	            	<?php echo $form->labelEx($profile,$field->varname,array("class"=> "col-sm-3 control-label") ); ?>
						<div class="input-group col-sm-4">

							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>


                    		<?php
                    		if ($widgetEdit = $field->widgetEdit($profile)) {
                    			echo $widgetEdit;
                    		} elseif ($field->range) {
                    			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
                    		} elseif ($field->field_type=="TEXT") {
                    			echo $form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50, 'class'=>'form-control', 'placeholder'=>'Nombre *'));
                    		} else {
                    			echo $form->textField($profile,$field->varname,array('class'=>'form-control','size'=>50,'maxlength'=>(($field->field_size)?$field->field_size:255)));
                    		}
                    		 ?>


						</div>
						<?php echo $form->error($profile,$field->varname,array('class'=>'text-center col-sm-6 col-sm-offset-2 text-danger')); ?>
		</div>



			<?php
			}
		}
?>

		<div class="form-group col-xs-12">

						<label class= 'col-sm-3 control-label'>Nombre de usuario</label>
						<div class="input-group col-sm-4">

							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        	<?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>

					</div>
<?php echo $form->error($model,'username',array('class'=>'text-center col-sm-6 col-sm-offset-2 text-danger')); ?>
		</div>

		<div class="form-group col-xs-12">
		    <label class= 'col-sm-3 control-label'>Contraseña</label>
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        	<?php echo $form->passwordField($model,'password', array('class'=>'form-control',)); ?>


						</div>
							<?php echo $form->error($model,'password',array('class'=>'text-center col-sm-6 col-sm-offset-2 text-danger')); ?>
		</div>

		<div class="form-group form-group col-sm-12">
					<label class= 'col-sm-3 control-label'>Confirmar contraseña</label>
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>

							<?php echo $form->passwordField($model,'verifyPassword', array('class'=>'form-control')); ?>


						</div>
						<?php echo $form->error($model,'verifyPassword',array('class'=>'text-center col-sm-6 col-sm-offset-2 text-danger')); ?>
						 <p class="" role="alert">
                            	<?php //echo UserModule::t("4 caracteres minimo"); ?>
                        </p>

		</div>

			<div class="form-group col-xs-12">
			<label class= 'col-sm-3 control-label'>Correo</label>
						<div class="input-group col-sm-4">
							<span class="input-group-addon"><span>@</span></span>

							<?php echo $form->textField($model,'email', array('class'=>'form-control')); ?>

						</div>
						<?php echo $form->error($model,'email',array('class'=>'text-center col-sm-6 col-sm-offset-2 text-danger')); ?>
			</div>








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

	<div class="form-group">

		<?php echo CHtml::submitButton(UserModule::t("Registrarse"), array('class'=>'btn btn-success btn-lg col-md-4 col-sm-offset-3 col-xs-12')); ?>

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
