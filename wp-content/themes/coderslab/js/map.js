(function($) {
/**
 * Mapa google dla Wordpressa
 */

 //Uruchamiamy google maps podczas loadowania strony
google.maps.event.addDomListener( window, 'load', gmaps_coderslab_initialize );

//funkcja mapy
function gmaps_coderslab_initialize() {

	//Jezeli w dokumencie html nie ma zdefinowanego kontenera mapy nie robimy nic
	if ( null != document.getElementById( 'map' ) ) {

	//Na małych ekranach zapobiegaj automatycznemu przesuwaniu mapy
	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	var isDraggable = w > 480 ? true : false;
	//Dodajemy parametry geograficvzne miejsca
	var myLatLng = {lat: -25.363, lng: 131.044};


	//Dodajmy trochę stylwow do naszej mapy - wiecej na snazzy maps
	var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];
	//[{"stylers":[{"hue":"#bbff00"},{"weight":0.5},{"gamma":0.5}]},{"elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","stylers":[{"color":"#a4cc48"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#E1DFDD"},{"visibility":"on"},{"weight":.2}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"},{"gamma":1.14},{"saturation":-18}]},{"featureType":"road.highway.controlled_access","elementType":"labels","stylers":[{"saturation":30},{"gamma":0.76}]},{"featureType":"road.local","stylers":[{"visibility":"simplified"},{"weight":0.4},{"lightness":-8}]},{"featureType":"water","stylers":[{"color":"#4aaecc"}]},{"featureType":"landscape.man_made","stylers":[{"color":"#718e32"}]},{"featureType":"poi.business","stylers":[{"saturation":68},{"lightness":-61}]},{"featureType":"administrative.locality","elementType":"labels.text.stroke","stylers":[{"weight":2.7},{"color":"#f4f9e8"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.stroke","stylers":[{"weight":1.5},{"color":"#e53013"},{"saturation":-42},{"lightness":28}]}];
	// Create a new StyledMapType object, passing it the array of styles,
	  	// as well as the name to be displayed on the map type control.

	//Inicjujemy mapę z stylami
	var styledMap = new google.maps.StyledMapType(styles,
	    {name: "Styled Map"});
	//Inicjujemy mapę
	var map = new google.maps.Map( document.getElementById( 'map' ), {
		zoom:           9,
		draggable: isDraggable,
		scrollwheel: false,
		center: myLatLng,
		mapTypeControlOptions: {
      	mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
	});
	//Kojarzymy mapę ze stylami

		map.mapTypes.set('map_style', styledMap);
  	map.setMapTypeId('map_style');


		var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });


	}
}
})(jQuery);
