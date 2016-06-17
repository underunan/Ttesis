<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/fonts/icommon-free/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_registro.css">


        <div>
        	<div class="jumbotron">
        		<div class="container">
        			<h1><?php echo UserModule::t("BARRIOS");?></h1>
        		<div class="panel panel-info col-xs-12 col-sm-6">
        		<div class="panel-heading text-center"><h4>Barrios</h4></div>
        		  <div class="panel-body">

        		  <?php /*******************CONTENIDO*******************/ ?>

    <?php
    /* @var $this BarrioController */
    /* @var $model Barrio */

    $this->breadcrumbs=array(
    	'Barrios'=>array('index'),
    	'Manage',
    );

    $this->menu=array(
    	array('label'=>'List Barrio', 'url'=>array('index')),
    	array('label'=>'Create Barrio', 'url'=>array('create')),
    );

    Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
    	$('.search-form').toggle();
    	return false;
    });
    $('.search-form form').submit(function(){
    	$('#barrio-grid').yiiGridView('update', {
    		data: $(this).serialize()
    	});
    	return false;
    });
    ");
    ?>

<h1>Administracion de Barrios</h1>

<!--p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p-->

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>

</div><!-- search-form -->




<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'barrio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idbarrio',
		'idmunicipio',
		'nombre',
		'latlonne',
		'latlonso',
		 array(
                    'class'=>'CButtonColumn'),
	),
)); ?>


        		  </div>
        	    </div>
	        </div>
        </div>
    </div>