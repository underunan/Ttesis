<?php  $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Profile");
$this->breadcrumbs=array(
	UserModule::t("Profile")=>array('profile'),
	UserModule::t("Edit"),
);
$this->menu=array(
	((UserModule::isAdmin())
		?array('label'=>UserModule::t('Manage Users'), 'url'=>array('/user/admin'))
		:array()),
    array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
    array('label'=>UserModule::t('Profile'), 'url'=>array('/user/profile')),
    array('label'=>UserModule::t('Change password'), 'url'=>array('changepassword')),
    array('label'=>UserModule::t('Logout'), 'url'=>array('/user/logout')),
);

?>

<?php if(Yii::app()->user->hasFlash('profileMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('profileMessage'); ?>
</div>
<?php endif; ?>

<?php
/*
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
));
*/
?>

	<p class="note"><?php //echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>

	<?php // echo $form->errorSummary(array($model,$profile)); ?>

<?php
/*
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			*/
			?>
	<div class="row">
		<?php /*echo $form->labelEx($profile,$field->varname);

		if ($widgetEdit = $field->widgetEdit($profile)) {
			echo $widgetEdit;
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			echo $form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		}
		echo $form->error($profile,$field->varname); */ ?>
	</div>
			<?php
			//}
	//	}
?>
	<div class="row">
		<?php //echo $form->labelEx($model,'nombre de usuario'); ?>
		<?php //echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'correo'); ?>
		<?php //echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php //echo $form->error($model,'email'); ?>
	</div>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>

<div class="panel panel-default info-usuario update">
  <div class="panel-heading">
    <img src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-responsive img-circle pull-left" alt="image info user" width="35px" height="35px">
        <h4 class="text-center">Actualizar perfil de usuario <a href="?r=user/profile/changepassword" class="btn btn-info btn-sm pull-right hidden-xs">Cancelar</a></h4>
        <a href="?r=user/profile/" class="btn btn-info btn-sm visible-xs">Cancelar</a></h4>
  </div>
  <div class="panel-body">



    <fieldset>
      <legend>Información básica</legend>

      <?php
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>
		<div class="form-group">
		<?php echo $form->labelEx($profile,$field->varname);

		if ($widgetEdit = $field->widgetEdit($profile)) {
			echo $widgetEdit;
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			echo $form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($profile,$field->varname,array('class'=>'form-control','size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		}
		echo $form->error($profile,$field->varname,array('class'=>'alert alert-danger','role'=>'alert')); ?>
		</div>
			<?php
			}
		}
?>

      <div class="form-group">
      <?php echo $form->labelEx($model,'nombre de usuario'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'form-control','size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username', array('class'=>'alert alert-danger')); ?>
      </div>

      <div class="form-group">
      <?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->textField($model,'email',array('class'=>'form-control','size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email',array('class'=>'alert alert-danger')); ?>
      </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'Dar de baja su cuenta'); ?>
        <?php echo $form->dropDownList($model, 'status', array('1'=>'1', '0'=>'0')); ?>

		<?php echo $form->error($model,'status',array('class'=>'alert alert-danger')); ?>
     </div>
  </div>
  <div class="panel-footer">
    <?php echo CHtml::submitButton($model->isNewRecord ? UserModule::t('Create') : UserModule::t('Guardar'),array('class'=>'btn btn-success')); ?>
  </div>
</div>

<?php $this->endWidget(); ?>