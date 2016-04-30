<?php
/*
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Profile");
$this->menu=array(
	((UserModule::isAdmin())
		?array('label'=>UserModule::t('Manage Users'), 'url'=>array('/user/admin'))
		:array()),
    array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
    array('label'=>UserModule::t('Edit'), 'url'=>array('edit')),
    array('label'=>UserModule::t('Change password'), 'url'=>array('changepassword')),
    array('label'=>UserModule::t('Logout'), 'url'=>array('/user/logout')),
);
*/
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">




<div class="panel panel-default info-usuario">
  <div class="panel-heading">
    <img src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-responsive img-circle pull-left" alt="image info user" width="35px" height="35px">
        <h4 class="text-center">Perfil de usuario <a href="?r=user/profile/changepassword" class="btn btn-danger btn-sm pull-right hidden-xs">Cambiar contraseña</a></h4>
        <a href="?r=user/profile/changepassword" class="btn btn-danger btn-sm visible-xs">Cambiar contraseña</a></h4>
  </div>
  <div class="panel-body">

    <fieldset>
      <legend>Información básica</legend>

      <?php
		$profileFields=ProfileField::model()->forOwner()->sort()->findAll();
		if ($profileFields) {
			foreach($profileFields as $field) {
				//echo "<pre>"; print_r($profile); die();
			?>
	  <div class="form-group row">
      <label class="col-md-3"><?php echo CHtml::encode(UserModule::t($field->title)); ?>:</label>
      <label class="col-md-6"><?php echo (($field->widgetView($profile))?$field->widgetView($profile):CHtml::encode((($field->range)?Profile::range($field->range,$profile->getAttribute($field->varname)):$profile->getAttribute($field->varname)))); ?></label>
      </div>
     <?php }} ?>
      <div class="form-group row">
      <label class="col-md-3"><?php echo CHTML::encode($model->getAttributeLabel('username')); ?>:</label>
      <label class="col-md-6"><?php echo CHTML::encode($model->username); ?></label>
      </div>

      <div class="form-group row">
      <label class="col-md-3"><?php echo CHTML::encode($model->getAttributeLabel('email')); ?>:</label>
      <label class="col-md-6"><?php echo CHTML::encode($model->email); ?></label>
      </div>
    </fieldset>

    <fieldset>
      <legend>Información de acceso</legend>
      <div class="form-group row">
      <label class="col-md-3"><?php echo CHTML::encode($model->getAttributeLabel('create_at')); ?>:</label>
      <label class="col-md-6"><?php echo CHTML::encode($model->create_at); ?></label>
      </div>

      <div class="form-group row">
      <label class="col-md-3"><?php echo CHTML::encode($model->getAttributeLabel('lastvisit_at')); ?>:</label>
      <label class="col-md-6"><?php echo CHTML::encode($model->lastvisit_at); ?></label>
      </div>

    </fieldset>
  </div>
  <div class="panel-footer">
    <a href="?r=user/profile/edit" class="btn btn-info">Editar mi cuenta</a>

    <?php
    $userrol = CHTML::encode($model->superuser);
    if($userrol == "1")
    { ?>
    <a href="?r=user/admin" class="btn btn-info">Gestionar cuentas</a>
   <?php } ?>


    </div>
</div>
