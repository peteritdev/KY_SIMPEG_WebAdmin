<div id="map">test</div>
<script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          scrollwheel: false,
          zoom: 8
        });
      }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDekOJps-bJVMkQG5RQZ4XPh9HBJUpfY8w&callback=initMap"
    async defer></script>