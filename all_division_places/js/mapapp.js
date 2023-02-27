function initMap() {

    var options = {
        center: {
            lat: 23.810331,
            lng: 90.412521
        },
        zoom: 8
    }

    map = new google.maps.Map(document.getElementById("map"),
        options)

}