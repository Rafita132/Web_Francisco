function initMap() {

    var myLatLng = { lat: 36.7268, lng: -4.2844 };

    var map = new google.maps.Map(document.getElementById('google-map'), {
        center: myLatLng,
        zoom: 14, 
        styles: [
            
        ]
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'El Rincón de la Victoria, Málaga'
    });
}
