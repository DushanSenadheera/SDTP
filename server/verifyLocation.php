<?php

include 'connection.php';

$sql = "SELECT * FROM location ORDER BY locationID DESC LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $by = $row['reportedBy'];
        $content = $row['description'];
        $lat = $row['lat'];
        $lng = $row['lng'];
        $img = $row['locImg'];
?>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <?php echo $by ?>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <img src="<?php echo "uploads/" . $img ?>" alt="">
                    <div id="map"></div>
                    <script>
                        function initMap() {
                            const map = new google.maps.Map(document.getElementById("map"), {
                                zoom: 12,
                                center: {
                                    lat: 6.9271,
                                    lng: 79.8612
                                },
                            });

                            new google.maps.Marker({
                                position: {
                                    lat: <?php echo $lat; ?>,
                                    lng: <?php echo $lng; ?>
                                },
                                map,
                                title: <?php echo $lngArr[$i]; ?>,
                            });



                            // Create an info window to share between markers.
                            const infoWindow = new google.maps.InfoWindow();

                            // Create the markers.
                            tourStops.forEach(([position, title], i) => {
                                const marker = new google.maps.Marker({
                                    position,
                                    map,
                                    title: `${i + 1}. ${title}`,
                                    label: `${i + 1}`,
                                    optimized: false,
                                });

                                const contentString =
                                    '<div id="content">' +
                                    '<div id="siteNotice">' +
                                    "</div>" +
                                    '<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
                                    '<div id="bodyContent">' +
                                    "<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large " +
                                    "sandstone rock formation in the southern part of the " +
                                    "Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) " +
                                    "south west of the nearest large town, Alice Springs; 450&#160;km " +
                                    "(280&#160;mi) by road. Kata Tjuta and Uluru are the two major " +
                                    "features of the Uluru - Kata Tjuta National Park. Uluru is " +
                                    "sacred to the Pitjantjatjara and Yankunytjatjara, the " +
                                    "Aboriginal people of the area. It has many springs, waterholes, " +
                                    "rock caves and ancient paintings. Uluru is listed as a World " +
                                    "Heritage Site.</p>" +
                                    '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
                                    "https://en.wikipedia.org/w/index.php?title=Uluru</a> " +
                                    "(last visited June 22, 2009).</p>" +
                                    "</div>" +
                                    "</div>";

                                // Add a click listener for each marker, and set up the info window.
                                const infowindow = new google.maps.InfoWindow({
                                    content: contentString,
                                    ariaLabel: "Uluru",
                                });

                                marker.addListener("click", () => {
                                    infowindow.open({
                                        anchor: marker,
                                        map,
                                    });
                                });
                            });
                        }

                        window.initMap = initMap;
                    </script>
                    <p><?php echo $content ?></p>
                    <form action="" method="post">
                        <a href=""><button>Reject</button></a>
                        <input type="submit" value="Accept">
                    </form>
                </div>
            </div>
        </div>

    <?php
    }
} else {
    ?>
    <script>
        alert("Something went wrong");
        window.location.href = "../index.php";
    </script>
<?php
}

$conn->close();

?>