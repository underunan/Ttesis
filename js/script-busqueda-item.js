$(function(){
	//codigo esconder al cargar la pagina el menu resolución adapta solo menor a 768px
	$('#bs-navbar-collapse-1').css({height:0});

	//codigo para tooltip
	$('[data-toggle="mensaje"]').tooltip();

	//codigo para seleccionar moneda
	$('.select-moneda').html('USD <span class="caret"></span>');
	moneda();

	//codigo de popover
	$('[data-toggle="popover"]').popover(function(ev){
		ev.preventDefault();
	});

	inicializar();
});


function inicializar(){
	var mapOptions = {
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	};
	map = new google.maps.Map(document.getElementById('mapa'),mapOptions);
    var bounds = new google.maps.LatLngBounds();
    var item1 = new google.maps.LatLng(12.458336,-87.103818);
    var item2 = new google.maps.LatLng(13.282687,-86.730969);
  	bounds.extend(item1);
    bounds.extend(item2);
    map.fitBounds(bounds);
}

function moneda(){
	$('.item-dolar').click(function(){
		$('.select-moneda').html('USD <span class="caret"></span>');
	});
	$('.item-cordoba').click(function(){
		$('.select-moneda').html('NIC <span class="caret"></span>');
	});
}
