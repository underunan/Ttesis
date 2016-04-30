<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">
<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('admin'),
	$model->username,
);


$this->menu=array(
    array('label'=>UserModule::t('Create User'), 'url'=>array('create')),
    array('label'=>UserModule::t('Update User'), 'url'=>array('update','id'=>$model->id)),
    array('label'=>UserModule::t('Delete User'), 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>UserModule::t('Are you sure to delete this item?'))),
    array('label'=>UserModule::t('Manage Users'), 'url'=>array('admin')),
    array('label'=>UserModule::t('Manage Profile Field'), 'url'=>array('profileField/admin')),
    array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
);
?>
<h1><?php echo UserModule::t('View User').' "'.$model->username.'"'; ?></h1>

<?php

	$attributes = array(
		'id',
		'username',
	);

	$profileFields=ProfileField::model()->forOwner()->sort()->findAll();
	if ($profileFields) {
		foreach($profileFields as $field) {
			array_push($attributes,array(
					'label' => UserModule::t($field->title),
					'name' => $field->varname,
					'type'=>'raw',
					'value' => (($field->widgetView($model->profile))?$field->widgetView($model->profile):(($field->range)?Profile::range($field->range,$model->profile->getAttribute($field->varname)):$model->profile->getAttribute($field->varname))),
				));
		}
	}

	array_push($attributes,
		'password',
		'email',
		'activkey',
		'create_at',
		'lastvisit_at',
		array(
			'name' => 'superuser',
			'value' => User::itemAlias("AdminStatus",$model->superuser),
		),
		array(
			'name' => 'status',
			'value' => User::itemAlias("UserStatus",$model->status),
		)
	);

	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>$attributes,
	));


?>

<div class="panel panel-default info-usuario">
  <div class="panel-heading">
    <img src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-responsive img-circle pull-left" alt="image info user" width="35px" height="35px">
        <h4 class="text-center">Perfil de usuario</h4>
  </div>
  <div class="panel-body">

    <fieldset>
      <legend>Información básica</legend>
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
</div>
