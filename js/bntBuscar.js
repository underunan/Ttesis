$(function(){
	//codigo esconder al cargar la pagina el menu resolución adapta solo menor a 768px
	//$('#bs-navbar-collapse-1').css({height:0});

	$(document.getElementById("formularios")).on('click',function(ev){
		ev.preventDefault();
		location.href = 'index.php?r=producto2';
	});



});