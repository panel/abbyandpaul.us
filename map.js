(function (google) {
  'use strict';

  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 15,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(41.9006, -87.6246), // New York

          // How you would like to style the map.
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
      };
      var mapElement = document.getElementById('map');
      var map = new google.maps.Map(mapElement, mapOptions);

      var markers = [
        // Spiaggia
        {
          position: new google.maps.LatLng(41.9006, -87.6246),
          map: map,
          title: 'Spiaggia',
          content: '<h3 class="black">Spiaggia</h3><p class="left">This is where both our ceremony and reception will be.</p>'
        }, // Hotel
        {
          position: new google.maps.LatLng(41.89908, -87.6217),
          map: map,
          title: 'Raffaello',
          content: '<h3 class="black">Raffaello</h3><p class="left">There is a block of rooms reserved here for the Flood/Nelson wedding.</p>'
        },
      ];

      markers.forEach(function (marker) {
        var marker = new google.maps.Marker(marker);
        var infoWindow = new google.maps.InfoWindow({
          content: marker.content
        });

        marker.addListener('click', function () {
          infoWindow.open(map, marker);
        });
      });
  }
}(google))
