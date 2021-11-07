<!DOCTYPE html>
<html>
  <head>

    <style type="text/css">
      #map {
        height: 400px;
        width: 100%;
      }
    </style>
    <script>
      function initMap() {
        const coordinate = { lat: -6.8214754, lng: 110.9326304 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: coordinate,
        });
        const marker = new google.maps.Marker({
          position: coordinate,
          map: map,
        });
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
</html>