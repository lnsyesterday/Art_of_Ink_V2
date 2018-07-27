var gMapAPIKey = "AIzaSyAPPCkIMBOAzef3i4ZYwl0n5H73Oi2w2YU";

var map;
var marker;
var mapMarkers=[];
function initMap() {

    map = new google.maps.Map(document.getElementById('locationMap'), {
      center: {lat: 56.159174, lng: 10.201936},
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}],
    draggable: false,
    disableDefaultUI: true
});

   marker = new google.maps.Marker({
	    position: {lat: 56.159174, lng: 10.201936},
	    map: map,
	    icon: {url: "img/logo.png", 
      scaledSize: new google.maps.Size(60, 60)},
      animation: google.maps.Animation.DROP,
	    category: "center"
	});
    marker.addListener('click', toggleBounce);  

}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}



 

