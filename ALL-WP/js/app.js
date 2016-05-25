$(document).foundation();
(function($) {



function new_map( $el ) {

  // var
  var $markers = $el.find('.marker');


  // vars
  var args = {
    zoom    : 16,
    center    : new google.maps.LatLng(0, 0),
    mapTypeId : google.maps.MapTypeId.ROADMAP
  };


  // create map
  var map = new google.maps.Map( $el[0], args);


  // add a markers reference
  map.markers = [];


  // add markers
  $markers.each(function(){

      add_marker( $(this), map );

  });


  // center map
  center_map( map );


  // return
  return map;

}


function add_marker( $marker, map ) {

  // var
  var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

  // create marker
  var marker = new google.maps.Marker({
    position  : latlng,
    map     : map
  });

  // add to array
  map.markers.push( marker );

  // if marker contains HTML, add it to an infoWindow
  if( $marker.html() )
  {
    // create info window
    var infowindow = new google.maps.InfoWindow({
      content   : $marker.html()
    });

    // show info window when marker is clicked
    google.maps.event.addListener(marker, 'click', function() {

      infowindow.open( map, marker );

    });
  }

}


function center_map( map ) {


  var bounds = new google.maps.LatLngBounds();


  $.each( map.markers, function( i, marker ){

    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

    bounds.extend( latlng );

  });


  if( map.markers.length == 1 )
  {

      map.setCenter( bounds.getCenter() );
      map.setZoom( 16 );
  }
  else
  {

    map.fitBounds( bounds );
  }

}

var map = null;

$(document).ready(function(){

  $('.acf-map').each(function(){

    // create map
    map = new_map( $(this) );

  });

});

})(jQuery);
