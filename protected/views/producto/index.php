
<section class="container-fluid video_form">

		<div style="height:500px; width:100%;" data-vide-bg="video/vid">
		</div>

		<form class="formulario" id="formularios">

<?php $form=$this->beginWidget('CActiveForm', array(
            	'action'=>Yii::app()->createUrl($this->route),
            	'method'=>'get',
            )); ?>

    			<!--div class="input-group">
    				<input type="text" class="form-control" placeholder="Lugar a buscar" href="#">
    			</div-->

            	<div class="input-group">
            	<?php echo $form->dropDownList($model,'idbarrio',
		CHtml::listData(Barrio::model()->findAll(array('order' => 'idbarrio')),'idbarrio','nombre'),array('class'=>'form-control', 'placeholder'=>'', 'id'=>'LUGAR_BUSQUEDA'));?>
                </div>
                <div class="input-group">
            		<?php echo $form->textField($model,'nombre',array('class'=>'form-control', 'placeholder'=>'Producto a buscar','id'=>'PALABRA_BUSQUEDA','style'=>'text-transform:uppercase;', 'onkeyup'=>'javascript:this.value=this.value.toUpperCase();' )); ?>
            	</div>


            		<?php echo CHtml::submitButton('Buscar', array('class'=>'bnt btn-danger btn-lg', 'id'=>'bntBusca')); ?>
    		<!--div class="input-group">
				<a class="bnt btn-danger btn-lg" id="bntBuscar" href="javascript:openPage()">Buscar</a>
			</div-->


 <?php $this->endWidget(); ?>



		</form>
	</section>



<div class="wide form">



</div><!-- search-form -->



				<section class="container informacion">
			<div class="row">
			<article class="col-md-4 col-lg-4">
				<span class="icon-brujula"></span>
				<h2>EXPLORA</h2>
				<div>
					<p>
						Explora las tiendas desde tu casa.
					</p>
				</div>
			</article>
			<article class="col-md-4 col-lg-4">
				<span class="icon-ubicacion"></span>
				<h2>ENCUENTRA</h2>
					<div>
						<p>
							Buscá sin salir de tu casa.
						</p>
					</div>
			</article>
			<article class="col-md-4 col-lg-4">
				<span class="icon-computer"></span>
				<h2>ENCUENTRA</h2>
					<div>
						<p>
							Buscá sin salir de tu casa.
						</p>
					</div>
			</article>
			</div>
		</section>

<section class="resultados container">
	<h1>EXPLORA LAS TIENDAS</h1>

	<div class="cards">
        <?php


        $this->widget('zii.widgets.CListView', array(
        		'id'=>'producto-grid',
	            'dataProvider'=>$model->search(),
	            'itemView'=>'_view',
	            'ajaxUpdate'=>false,
        	));
        ?>
	</div>
</section>
