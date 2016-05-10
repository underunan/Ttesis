<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">

    <meta name="language" content="es">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzfZm59iFzSPrwsc781ByiEsKl4aeuZow"></script>
	<title>Explora las tiendas</title>
	<link rel="stylesheet" type="text/css" href="fonts/icommon-free/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        .body{
            padding-bottom: 40px;
            padding-top: 40px;
        }

        .login{
            margin: 0 auto;
            max-width: 400px;
            padding: 15px;
        }

        #sha{
            box-shadow: 0px 0px 18px 0px rgba(48, 50, 0, 0.48);
            -webkit-box-shadow: 0px 0px 18px 0px rgba(48, 50, 0, 0.48);
            -moz-box-shadow: 0px 0px 18px 0px rgba(48, 50, 0, 0.48);
            max-width: 400px;
        }

        #avatar{
            border-radius: 50%;
            display: block;
            height: 96px;
            margin: 0px auto 10px;
            width: 96px;
        }

        .info-usuario{
        box-shadow: 0px 0px 18px 0px rgba(48, 50, 0, 0.48);
            -webkit-box-shadow: 0px 0px 18px 0px rgba(48, 50, 0, 0.48);
            -moz-box-shadow: 0px 0px 18px 0px rgba(48, 50, 0, 0.48);
            margin: 0 auto;
            max-width: 700px;
            padding: 15px;
        }

    </style>

   <?php /* <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">*/?>
    <body>


    <header class="container cabecera">
	<?php include 'barra-navegacion/navbar.php';?>
	</header>

	<?php echo $content; ?>
<div></div>
    <?php include 'pie-pagina/footer.php';?>


<script type="text/javascript" src="js/modernizr.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw86BjBuILI2xv5MAsgPfOOBQUc0ZByXY&callback=inicializar" async defer></script-->
<!-- <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> -->

<script type="text/javascript" src="js/jquery.vide.js"></script>
<script type="text/javascript" src="js/bntBuscar.js"></script>
<script type="text/javascript" src="js/map_script.js"></script>
<script src="js/pinterestgrid.js"></script>




<script type="text/javascript">
    (function () {
        'use strict';

        // 1. Plugin
        var grid = new PinterestGrid({
            container: '.cards',
            item: '.card',
            gutter: 10,
            delay: 200
        });

        // 2. Redimensionamiento
        window.addEventListener('resize', function() {
            grid.init();
        });

        // 3. Reajuste al cargar imagenes
        Array.from(document.querySelectorAll('.card img')).forEach(function(item) {
            item.addEventListener('load', function() {
                grid.init();
                item.removeEventListener('load');
            }, false);
        });

    } ());
</script>
	</body>
</html>