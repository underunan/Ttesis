<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change Password");
$this->breadcrumbs=array(
	UserModule::t("Login") => array('/user/login'),
	UserModule::t("Change Password"),
);
?>

<h1><?php echo UserModule::t("Change Password"); ?></h1>


<div class="form">
<?php echo CHtml::beginForm(); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	<?php echo CHtml::errorSummary($form); ?>

	<div class="row">
	<?php echo CHtml::activeLabelEx($form,'password'); ?>
	<?php echo CHtml::activePasswordField($form,'password'); ?>
	<p class="hint">
	<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
	</p>
	</div>

	<div class="row">
	<?php echo CHtml::activeLabelEx($form,'verifyPassword'); ?>
	<?php echo CHtml::activePasswordField($form,'verifyPassword'); ?>
	</div>


	<div class="row submit">
	<?php echo CHtml::submitButton(UserModule::t("Save")); ?>
	</div>

<div class="panel panel-default info-usuario update">
  <div class="panel-heading">
    <img src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-responsive img-circle pull-left" alt="image info user" width="35px" height="35px">
        <h4 class="text-center">Recuperación</h4>
  </div>
  <div class="panel-body">


      <div class="form-group">

      </div>

      <div class="form-group">

     </div>

      <div class="form-group">

      </div>

    <div class="form-group">

     </div>

     <div class="form-group">
      <div class="col-sm-4 hidden-xs"></div>

      <div class="col-sm-4 hidden-xs"></div>
     </div>

  </div>
</div>


<?php echo CHtml::endForm(); ?>
</div><!-- form -->