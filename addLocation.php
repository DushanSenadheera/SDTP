<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/addLocation.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="add-location-form">
        <form action="./server/addLocation.php" method="post" enctype="multipart/form-data">
            <div id="map"></div>
            <script>
        let map;
let markers = [];

function initMap() {
  const haightAshbury = { lat: 6.9271, lng: 79.8612 };

  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: haightAshbury,
    mapTypeId: "terrain",
  });
  // This event listener will call addMarker() when the map is clicked.
  map.addListener("click", (event) => {
    addMarker(event.latLng);
  });
  // add event listeners for the buttons
  document
    .getElementById("show-markers")
    .addEventListener("click", showMarkers);
  document
    .getElementById("hide-markers")
    .addEventListener("click", hideMarkers);
  document
    .getElementById("delete-markers")
    .addEventListener("click", deleteMarkers);
  // Adds a marker at the center of the map.
  addMarker(haightAshbury);
}

// Adds a marker to the map and push to the array.
function addMarker(position) {

    const pos = position;

    var lat = pos.lat();
    var lng = pos.lng();

    document.getElementById('setLat').value = lat;
    document.getElementById('setLng').value = lng;
    
  const marker = new google.maps.Marker({
    position,
    map,
  });

  markers.push(marker);
  
// Function to create the cookie
function createCookie(name, value, days) {
    var expires;
      
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
      
    document.cookie = escape(name) + "=" + 
        escape(value) + expires + "; path=/";
}


}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
  for (let i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function hideMarkers() {
  setMapOnAll(null);
}

// Shows any markers currently in the array.
function showMarkers() {
  setMapOnAll(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  hideMarkers();
  markers = [];
}

window.initMap = initMap;
    </script>
            <br>
            Add Images here : <input type="file" name="fileToUpload">
            <br>
            <textarea placeholder="Description" name="desc" id="desc" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" class="primary-btn" value="Add cleanup Location">
            <input type="hidden" name="setLat" id="setLat" value=""> 
            <input type="hidden" name="setLng" id="setLng" value=""> 
        </form>
        <br>
    </div>
    <br>
    <footer>
    <?php include 'footer.php'; ?>
    </footer>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCinwbF4gUyRzEGXYpAf0lHyBW3wdYlDx4&callback=initMap&v=weekly" defer></script>
    
</body>

</html>