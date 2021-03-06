<?php
/* @var $this ImagenController */
/* @var $data Imagen */
?>

<?php $idestado = CHtml::encode($data->idestado_fisico); $estado = 'nan';
            if($idestado == 2){$estado = 'usado';}else{$estado = 'nuevo';}?>

<article class="card well <?php echo $estado; ?>">
								<h4><span class="label label-primary pull-left"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $estado?></span></h4>

            <?php /*$SQL = "select GetImgCode(" .CHtml::encode($data->idproducto).")";?>
            <?php $findMAX = Yii::app()->db->createCommand( $SQL )->queryRow();*/?>

			<img src="data:image/jpeg;base64,<?php echo CHtml::encode($data->imagen); ?>" style="height:auto" alt="zapatos" class="img-responsive">

								<div class="caption">
									<h3 class="text-center">
									<?php echo CHtml::encode($data->nombre); ?></h3>
									<?php $idmoneda = CHtml::encode($data->idmoneda); $moneda = 'nan';
                if($idmoneda == 2){$moneda = 'U$';}else{$moneda = 'C$';} ?>
									<span class="glyphicon glyphicon-tags">
									    <?php
									        echo $moneda."".CHtml::encode($data->precio);
                                        ?>
									</span>
									<div class="badge pull-right item-fecha">
										<span class="glyphicon glyphicon-time"></span>
										<span>Publicado <?php echo CHtml::encode($data->fecha_publicacion); ?></span>
									</div>

								</div>
								<p>
									<?php echo CHtml::link('Ver más', array('view', 'id'=>$data->idproducto), array('class'=>'btn btn-danger btn-lg col-sm-12 col-xs-12' )); ?>
								</p>
</article>


<?php
/*
*/?>
