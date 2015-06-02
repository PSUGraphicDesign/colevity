$(function () {

  $("#sticky-nav").sticky({ topSpacing: 0 });


  if ( $('.map').length ) {
    map_init('#map-canvas');
  }

  var scrollOffset;

  $('[data-modal-url]').on('click', function (e) {
    $.ajax($(this).data('modal-url'), {
      success: function (data) {
        scrollOffset = $(window).scrollTop();
        $(document.body).addClass('modal-open');
        $('#modal').css({
          'padding-top': scrollOffset + 100,
          'height': $(document).height()
        }).fadeIn(100);
        $('#modal').html(data);
      }
    });
  });
  
  $('#modal').on('click', '.close', function (e) {
    $(document.body).removeClass('modal-open');
    $('#modal').fadeOut(100);
  });
});

function map_init (map) {
  var lat = $(map).data('center-lat'),
      lng = $(map).data('center-lng'),
      zoom = $(map).data('zoom');

  var mapOptions = {
    zoom: zoom,
    center: new google.maps.LatLng(lat, lng),
    disableDefaultUI: true,
    scrollwheel: false,
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
