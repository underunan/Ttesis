$(function (){
	//codigo esconder al cargar la pagina el menu resolución adapta solo menor a 768px
	//$('#bs-navbar-collapse-1').css({height:0});

	$(document.getElementById("btnBuscar")).on('click',function(ev){
		ev.preventDefault();
		location.href = 'index.php?r=producto2';
//index.php?r=producto2%2Findex&Producto%5Bidbarrio%5D=&articulo=MOTO&Producto%5Bnombre%5D=&Producto%5Bidestado_fisico%5D=&Producto%5Bidmoneda%5D=

	});



});