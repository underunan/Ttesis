<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>




<article class="col-sm-6 col-md-4">
		<div class="thumbnail">

            <?php $idestado = CHtml::encode($data->idestado_fisico); $estado = 'nan';
            if($idestado == 2){$estado = 'Usado';}else{$estado = 'nuevo';}?>

			<h4><span class="label label-warning pull-left"><span class="icon icon-eye"></span><?php echo $estado?></span></h4>
			<!--img src="img/pantalon.jpg" style="height:auto" alt="zapatos" class="img-responsive"-->
			<?php $SQL = "select \"imagen\" from \"Imagen\" where \"idproducto\" = " .CHtml::encode($data->idproducto);?>
            <?php $findMAX = Yii::app()->db->createCommand( $SQL )->queryRow();?>

			<img src="data:image/jpeg;base64,<?php echo $findMAX["imagen"];?>" style="height:auto" alt="zapatos" class="img-responsive">



    		<div class="caption bg-danger container-fluid">
    			<h4 class="titulo text-center"><?php echo CHtml::encode($data->nombre); ?></h4>

    		<div class="item-descripcion">
                <?php $idmoneda = CHtml::encode($data->idmoneda); $moneda = 'nan';
                if($idmoneda == 2){$moneda = 'U$';}else{$moneda = 'C$';}?>
                <span class="item-valor col-sm-6 icon icon-price-tag pull-left"><?php echo CHtml::encode($data->precio); echo $moneda;?></span>

    		<div class="item-fecha col-sm-6 badge pull-right">
    			<span class="icon icon-history"></span>
    		    <span><?php echo CHtml::encode($data->fecha_publicacion); ?></span>
    		</div>
    		</div>


		<?php echo CHtml::link('Ver mas', array('view', 'id'=>$data->idproducto), array('class'=>'btn btn-danger btn-lg col-xs-12 col-sm-12' )); ?>


									<!--a href="busqueda_item.php" class="btn btn-danger btn-lg col-xs-12 col-sm-12" role="button">Ver más</a-->
								</div>
							</div>
</article>


<?php /*
<b><?php echo CHtml::encode($data->getAttributeLabel('idproducto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproducto), array('view', 'id'=>$data->idproducto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->idusuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategoria')); ?>:</b>
	<?php echo CHtml::encode($data->idcategoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmoneda')); ?>:</b>
	<?php echo CHtml::encode($data->idmoneda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idestado_fisico')); ?>:</b>
	<?php echo CHtml::encode($data->idestado_fisico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbarrio')); ?>:</b>
	<?php echo CHtml::encode($data->idbarrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_publicacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_publicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

*/?>

</div>