<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">
<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
?>


<div class="body">
    <div class="container well" id="sha">
        <div class"row">
            <div class="col-xs-12">
                <img src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-responsive" id="avatar">
            </div>
        </div>

        <div class="login">

           <?php echo CHtml::beginForm(); ?>

                	<?php //echo CHtml::errorSummary($model); ?>

                    <? /*********************************************************/?>
                    <div class="form-group">

                	  <?php echo CHtml::activeTextField($model,'username',array('class'=>'form-control', 'placeholder'=>'Ingresa tu nombre de usuario'));?>
                	  <?php echo CHtml::error($model,'username',array('class'=>'text-danger text-center')); ?>
					</div>

		            <div class="form-group">

                    <?php echo CHtml::activePasswordField($model,'password', array('class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña')); ?>
                    <?php echo CHtml::error($model,'password',array('class'=>'text-danger text-center')); ?>
	            	</div>



	               <?php echo CHtml::submitButton(UserModule::t("Iniciar sesión"), array('class'=>'btn btn-success btn-lg btn-block')); ?>
	               <div class="checkbox">
	                    <label>
                    		<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>No cerrar sesión
                    		<?php //echo CHtml::activeLabelEx($model,'rememberMe'); ?>
                		</label>
                	</div>
                    <div class="form-group">
                		<p class="help-block hint">
                		<?php echo CHtml::link(UserModule::t("Registrarse"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("¿Perdistes tu contraseña?"),Yii::app()->getModule('user')->recoveryUrl); ?>
                		</p>
                	</div>


                <?php echo CHtml::endForm(); ?>
        </div>
    </div>

<!--
	<div class="jumbotron">
		<div class="container">
		<div class="panel panel-info col-xs-12 col-sm-12">
		<div class="panel-heading text-center"><h4>Únete</h4></div>
		  <div class="panel-body">

                <h1><?php //echo UserModule::t("Login"); ?></h1>

                <?php// if(Yii::app()->user->hasFlash('loginMessage')): ?>

                <div class="success">
                	<?php// echo Yii::app()->user->getFlash('loginMessage'); ?>
                </div>

                <?php //endif; ?>

                <p><?php //echo UserModule::t("Por favor llena los espacios con tus credenciales:"); ?></p>

                <div class="form">
                <?php// echo CHtml::beginForm(); ?>

                	<?php// echo CHtml::errorSummary($model); ?>

                    <? /*********************************************************/?>
                    <div class="form-group form-group">
					<div class="col-xs-12">
						<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>

                		    <?php// echo CHtml::activeTextField($model,'username',array('class'=>'form-control', 'placeholder'=>'Nombre de usuario *'));?>

						</div>
					</div>
		</div>

		<div class="form-group form-group">
					<div class="col-xs-12">
						<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>

                        	<?php //echo CHtml::activePasswordField($model,'password', array('class'=>'form-control', 'placeholder'=>'Clave *')); ?>

						</div>
					</div>
		</div>
              <?php /***********************************/?>


                <?php /*	<div class="row">
                		<?php echo CHtml::activeLabelEx($model,'nombre de usuario'); ?>
                		<?php echo CHtml::activeTextField($model,'username') ?>
                	</div>

                	<div class="row">
                		<?php echo CHtml::activeLabelEx($model,'clave'); ?>
                		<?php echo CHtml::activePasswordField($model,'password') ?>
                	</div>*/?>

                	<div class="row">
                		<p class="hint">
                		<?php //echo CHtml::link(UserModule::t("Registrar"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php //echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
                		</p>
                	</div>

                	<div class="row rememberMe">
                		<?php //echo CHtml::activeCheckBox($model,'rememberMe'); ?>
                		<?php //echo CHtml::activeLabelEx($model,'rememberMe'); ?>
                	</div>

                		<div class="col-sm-4">

		                <?php //echo CHtml::submitButton(UserModule::t("Login"), array('class'=>'btn btn-success btn-lg')); ?>

	                    </div>

                <?php//echo CHtml::endForm(); ?>
                </div><!-- form -->


                <?php
                /*
                $form = new CForm(array(
                    'elements'=>array(
                        'username'=>array(
                            'type'=>'text',
                            'maxlength'=>32,
                        ),
                        'password'=>array(
                            'type'=>'password',
                            'maxlength'=>32,
                        ),
                        'rememberMe'=>array(
                            'type'=>'checkbox',
                        )
                    ),

                    'buttons'=>array(
                        'login'=>array(
                            'type'=>'submit',
                            'label'=>'Login',
                        ),
                    ),
                ), $model);
                */
                ?>
</div>
</div>
</div>
</div>

-->
