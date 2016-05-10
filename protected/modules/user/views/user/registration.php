<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">
<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registration");?>
<?php /*$this->breadcrumbs=array(UserModule::t("Registration"),);*/?>




<?php  $form=$this->beginWidget('UActiveForm', array(
	'id'=>'registration-form',
	'enableAjaxValidation'=>true,
	'disableAjaxValidationAttributes'=>array('RegistrationForm_verifyCode'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
));  ?>

	<?php echo $form->errorSummary(array($model,$profile)); ?>
<?php /***********************+++++FORM++++*********************/?>


<?php /***********************+++++FORM++++*********************/?>

<div class="panel panel-default info-usuario update">
  <div class="panel-heading">
    <img src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-responsive img-circle pull-left" alt="image info user" width="35px" height="35px">
        <h4 class="text-center">Registrate</h4>
  </div>
  <div class="panel-body">



		<?php
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>
			<div class="form-group">
            <?php echo $form->labelEx($profile,$field->varname); ?>
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
						<?php echo $form->error($profile,$field->varname,array('class'=>'text-danger text-center')); ?>
            </div>
			<?php
			}
		}
?>


      <div class="form-group">
        <label class= ' control-label'>Nombre de usuario</label>
        <?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
        <?php echo $form->error($model,'username',array('class'=>'text-danger text-center')); ?>
      </div>

      <div class="form-group">
        <label class= 'col-sm-3 control-label'>Correo</label>
		<?php echo $form->textField($model,'email', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'email',array('class'=>'text-danger text-center')); ?>
     </div>

      <div class="form-group">
        <label class= 'control-label'>Contraseña</label>
        <?php echo $form->passwordField($model,'password', array('class'=>'form-control',)); ?>
		<?php echo $form->error($model,'password',array('class'=>'text-danger text-center')); ?>
      </div>

    <div class="form-group">
        <label class= 'control-label'>Confirmar contraseña</label>
		<?php echo $form->passwordField($model,'verifyPassword', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'verifyPassword',array('class'=>'text-danger text-center')); ?>
     </div>

     <div class="form-group">
      <div class="col-sm-4 hidden-xs"></div>
      <?php echo CHtml::submitButton(UserModule::t("Registrarse"), array('class'=>'btn btn-success btn-lg col-sm-4 col-xs-12')); ?>
      <div class="col-sm-4 hidden-xs"></div>
     </div>

  </div>
</div>

<?php $this->endWidget(); ?>
