<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
		'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
	    ),
	)); ?>

	<?php echo $form->errorSummary($model); ?>



<div class="panel-body">
    <div class="form-group">
        <?php //echo $form->labelEx($model,'idusuario'); ?>
		<?php // echo $form->textField($model,'idusuario',array('class'=>'form-control'); ?>
		<?php echo $form->hiddenField($model,'idusuario',array('class'=>'form-control', 'value'=>Yii::app()->user->id)); ?>
		<?php echo $form->error($model,'idusuario', array('class'=>'alert alert-danger')); ?>
	</div>

	<div class="form-group">
        <?php echo $form->labelEx($model,'Categoria'); ?>
		<?php //echo $form->textField($model,'idcategoria',array('class'=>'form-control')); ?>
		<?php echo $form->dropDownList($model,'idcategoria',
		CHtml::listData(Categoria::model()->findAll(array('order' => 'idcategoria')),'idcategoria','nombre' ), array('class'=>'form-control'));?>
		<?php echo $form->error($model,'idcategoria', array('class'=>'alert alert-danger')); ?>
	</div>

	<div class="form-group">
        <?php echo $form->labelEx($model,'Tipo de Moneda'); ?>
		<?php // echo $form->textField($model,'idmoneda',array('class'=>'form-control')); ?>
		<?php echo $form->dropDownList($model,'idmoneda',
		CHtml::listData(Moneda::model()->findAll(array('order' => 'idmoneda')),'idmoneda','moneda' ), array('class'=>'form-control'));?>
		<?php echo $form->error($model,'idmoneda', array('class'=>'alert alert-danger')); ?>
	</div>

	<div class="form-group">
        <?php echo $form->labelEx($model,'Estado Fisico'); ?>
		<?php //echo $form->textField($model,'idestado_fisico',array('class'=>'form-control')); ?>
		<?php echo $form->dropDownList($model,'idestado_fisico',
		CHtml::listData(EstadoFisico::model()->findAll(array('order' => 'idestado_fisico')),'idestado_fisico','estado_fisico'),array('class'=>'form-control'));?>
		<?php echo $form->error($model,'idestado_fisico', array('class'=>'alert alert-danger')); ?>
	</div>

	<div class="form-group">
        <?php echo $form->labelEx($model,'Barrio'); ?>
		<?php //echo $form->textField($model,'idbarrio',array('class'=>'form-control')); ?>
		<?php echo $form->dropDownList($model,'idbarrio',
		CHtml::listData(Barrio::model()->findAll(array('order' => 'idbarrio')),'idbarrio','nombre'),array('class'=>'form-control'));?>
		<?php echo $form->error($model,'idbarrio', array('class'=>'alert alert-danger')); ?>
	</div>

	<div class="form-group">
        <?php echo $form->labelEx($model,'Nombre'); ?>
        <?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30,'class'=>'form-control' ,'style'=>'text-transform:uppercase;', 'onkeyup'=>'javascript:this.value=this.value.toUpperCase();')); ?>
		<?php echo $form->error($model,'nombre', array('class'=>'alert alert-danger')); ?>
	</div>

	<div class="form-group">
        <?php echo $form->labelEx($model,'Precio'); ?>
		<?php echo $form->numberField($model,'precio',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'precio',array('class'=>'alert alert-danger')); ?>
	</div>

	<div class="form-group">
        <?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'descripcion',array('class'=>'alert alert-danger')); ?>
	</div>

    <div>
        <?php echo $form->labelEx($model,'Especificar localizacion'); ?>

    	<?php echo $form->textField($model,'latlonne' ,array('class'=>'form-control', 'placeholder'=>'Latitud Norte *')); ?>
        <?php echo $form->error($model,'latlonne'); ?>

        <?php echo $form->textField($model,'latlonso' ,array('class'=>'form-control', 'placeholder'=>'Longitud Sur *')); ?>
        <?php echo $form->error($model,'latlonso'); ?>
    </div>

	<div class="form-group">
        <?php //echo $form->labelEx($model,'fecha_publicacion'); ?>
		<?php //echo $form->textField($model,'fecha_publicacion',array('class'=>'form-control')); ?>
 
		<?php //echo $form->dateField($model,'fecha_publicacion',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'fecha_publicacion',array('class'=>'alert alert-danger')); ?>
	</div>

	<div class="form-group">
        <?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'direccion',array('class'=>'alert alert-danger')); ?>
	</div>


	<div>
	<?php echo $form->labelEx($model,'imagen'); ?>
	<input type="file" id="filePicker">
    <?php echo $form->hiddenField($model,'imagen'); ?>
    <?php echo $form->error($model,'imagen'); ?>
     <script>
                                                            var handleFileSelect = function(evt) {
                                                                var files = evt.target.files;
                                                                var file = files[0];
                                                                if (files && file) {
                                                                    var reader = new FileReader();
                                                                    reader.onload = function(readerEvt) {
                                                                        var binaryString = readerEvt.target.result;
                                                                        document.getElementById("Producto_imagen").value = btoa(binaryString);
                                                                    };
                                                                    reader.readAsBinaryString(file);
                                                                }
                                                            };
                                                            if (window.File && window.FileReader && window.FileList && window.Blob) {
                                                                document.getElementById('filePicker').addEventListener('change', handleFileSelect, false);
                                                            } else {
                                                                alert('TIPO DE ARCHIVO NO SOPORTADO');
                                                            }
    </script>
	</div>

    <p class="form-group">
    <div class="col-sm-4 hidden-xs"></div>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar',array('class'=>'btn btn-success btn-lg col-sm-4 col-xs-12')); ?>
		 <div class="col-sm-4 hidden-xs"></div>
		</p>
    </div>
</div>




<?php $this->endWidget(); ?>