{{-- Part of allstars project. --}}

<div id="map-canvas" style="width:100%; height: 350px;"></div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyAbgi_AVsZmVJf_BLgktVDVSZWuqMO-LWU"></script>
<script type="text/javascript">
    var myLatlng;
    var map;
    var marker;

    function initialize() {
        myLatlng = new google.maps.LatLng(25.0488505, 121.5595499);

        var mapOptions = {
            zoom: 13,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            draggable: false
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var contentString = '<p>105 八德路四段123號3樓</p>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Marker'
        });

        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>