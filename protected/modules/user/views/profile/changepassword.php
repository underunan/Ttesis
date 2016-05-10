<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">
<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change Password");
$this->breadcrumbs=array(
	UserModule::t("Profile") => array('/user/profile'),
	UserModule::t("Change Password"),
);
$this->menu=array(
	((UserModule::isAdmin())
		?array('label'=>UserModule::t('Manage Users'), 'url'=>array('/user/admin'))
		:array()),
    array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
    array('label'=>UserModule::t('Profile'), 'url'=>array('/user/profile')),
    array('label'=>UserModule::t('Edit'), 'url'=>array('edit')),
    array('label'=>UserModule::t('Logout'), 'url'=>array('/user/logout')),
);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'changepassword-form',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


	<div class="panel panel-default info-usuario update">
    <div class="panel-heading">
    <img src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-responsive img-circle pull-left" alt="image info user" width="35px" height="35px">
        <h4 class="text-center">Cambiar contraseña<a href="?r=user/profile/" class="btn btn-info btn-sm pull-right hidden-xs">Cancelar</a></h4>
        <a href="?r=user/profile/" class="btn btn-info btn-sm visible-xs">Cancelar</a></h4>
  </div>
  <div class="panel-body">


		<div class="form-group">
            <?php echo $form->labelEx($model,'Contraseña vieja'); ?>
        	<?php echo $form->passwordField($model,'oldPassword',array('class'=>'form-control')); ?>
        	<?php echo $form->error($model,'oldPassword',array('class'=>'text-danger')); ?>
		</div>

      <div class="form-group">
            <?php echo $form->labelEx($model,'Nueva contraseña'); ?>
        	<?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
        	<?php echo $form->error($model,'password',array('class'=>'text-danger')); ?>
        	<p class="hint">
                <?php echo UserModule::t("4 caracteres como tamaño minimo."); ?>
        	</p>

      </div>

      <div class="form-group">
            <?php echo $form->labelEx($model,'Repitir contraseña'); ?>
        	<?php echo $form->passwordField($model,'verifyPassword',array('class'=>'form-control')); ?>
        	<?php echo $form->error($model,'verifyPassword',array('class'=>'text-danger')); ?>
      </div>

    <div class="form-group">
        <?php echo CHtml::submitButton(UserModule::t("Guardar"), array('class'=>'btn btn-success')); ?>
     </div>

</div>


<?php $this->endWidget(); ?>
</div><!-- form -->