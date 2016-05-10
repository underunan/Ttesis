<?php
/* @var $this ImagenController */
/* @var $data Imagen */
?>

<?php $idestado = CHtml::encode($data->idproducto0->idestado_fisico); $estado = 'nan';
            if($idestado == 2){$estado = 'usado';}else{$estado = 'nuevo';}?>

<article class="card well <?php echo $estado; ?>">
								<h4><span class="label label-primary pull-left"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $estado?></span></h4>
								<img src="data:image/jpeg;base64,<?php echo CHtml::encode($data->imagen,array('class'=>"img-responsive img-thumbnail")); ?>" alt="zapatos">
								<div class="caption">
									<h3 class="text-center"><?php echo CHtml::encode($data->idproducto0->nombre); ?></h3>
									<?php $idmoneda = CHtml::encode($data->idproducto0->idmoneda); $moneda = 'nan';
                if($idmoneda == 2){$moneda = 'U$';}else{$moneda = 'C$';} ?>
									<span class="glyphicon glyphicon-tags">
									    <?php
									        echo $moneda."".CHtml::encode($data->idproducto0->precio);
                                        ?>
									</span>
									<div class="badge pull-right item-fecha">
										<span class="glyphicon glyphicon-time"></span>
										<span>Publicado <?php echo CHtml::encode($data->idproducto0->fecha_publicacion); ?></span>
									</div>

								</div>
								<p>
									<?php echo CHtml::link('Ver más', array('view', 'id'=>$data->idimagen), array('class'=>'btn btn-danger btn-lg col-sm-12 col-xs-12' )); ?>
								</p>
</article>


<?php
/*
*/?>
