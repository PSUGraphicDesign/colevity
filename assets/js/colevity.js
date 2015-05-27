$(function () {
  // $('ul.accordion').accordion();
  if ( $('.map').length ) {
    map_init('#map-canvas');
  }
});

function map_init (map) {
  var lat = $(map).data('center-lat'),
      lng = $(map).data('center-lng'),
      zoom = $(map).data('zoom');

  var mapOptions = {
    zoom: zoom,
    center: new google.maps.LatLng(lat, lng),
    disableDefaultUI: true,
    styles: [
  {
    "featureType": "landscape.man_made",
    "stylers": [
      { "visibility": "simplified" },
      { "saturation": -100 },
      { "lightness": -20 }
    ]
  },{
    "featureType": "landscape.natural",
    "stylers": [
      { "visibility": "simplified" },
      { "saturation": -100 },
      { "lightness": -30 }
    ]
  },{
    "featureType": "poi",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "road",
    "stylers": [
      { "visibility": "simplified" },
      { "saturation": -100 }
    ]
  },{
    "featureType": "transit",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "administrative",
    "stylers": [
      { "visibility": "simplified" },
      { "saturation": -100 },
      { "lightness": -77 }
    ]
  },{
    "stylers": [
      { "saturation": -100 }
    ]
  },{
    "featureType": "road",
    "elementType": "labels.text.stroke",
    "stylers": [
      { "saturation": -100 },
      { "lightness": 100 },
      { "visibility": "simplified" }
    ]
  }
]
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var image = 'assets/images/MapMarker.png';

  var marker = new google.maps.Marker({
      position: mapOptions.center,
      map: map,
      icon: image,
      title: 'Hello World!'
  });
}
