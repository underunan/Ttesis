/*function inicializar(){
	var mapOptions = {
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		zoom: 4,
		scrollwheel: false
	};
	map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
    var bounds = new google.maps.LatLngBounds();
    var item1 = new google.maps.LatLng(12.458336,-87.103818);
    var item2 = new google.maps.LatLng(13.282687,-86.730969);
  	bounds.extend(item1);
    bounds.extend(item2);
    map.fitBounds(bounds);
}
*/

/*
function inicializar(){
  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 5
  });
}
*/

$(function(){
    map = new google.maps.Map(document.getElementById('map-canva'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 5
  });
});

/*
$('#modal-info').on('shown.bs.modal',function(){
	inicializar();
});

*/