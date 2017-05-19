//Google maps plugin URL(https://developers.google.com/maps/documentation/javascript/adding-a-google-map)
function initMap() {
    var coords = {lat: 55.4902352, lng: 9.4730771};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: coords,
        disableDefaultUI: true,
        scrollwheel: false,
        draggable: false
    });
    var marker = new google.maps.Marker({
        position: coords,
        map: map
    });
}