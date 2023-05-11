<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>

<body>
    <?php

    include './server/connection.php';

    $sql = "SELECT * FROM location";
    $result = $conn->query($sql);

    $latArr = array();
    $lngArr = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $reportedBy = $row['reportedBy'];
            $description = $row['description'];
            $lat = $row['lat'];
            // $latArr = array($lat);
            array_push($latArr, $lat);
            json_encode($latArr);
            $lng = $row['lng'];
            // $lngArr = array($lng);
            array_push($lngArr, $lng);
            json_encode(count($lngArr));
            $locationImg = $row['locImg'];
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
    <header id="header">
        <?php include 'navbar.php'; ?>
        <div class="header-content">
            <h3>Let's <span>create</span> <br> a <span>cleaner</span> future <span>together</span></h3>
            <br>
            <div class="description">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat quasi voluptatem cumque voluptatum! Labore, consequuntur dicta, odit sed et velit, culpa a assumenda at aperiam sunt voluptates veniam quibusdam hic?</p>
            </div>
            <div class="cta">
                <a href="#explore"><button class="primary-btn">Get to Know</button></a>
            </div>
        </div>
    </header>
    <main>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="./assets/sri-lanka-colombo-best-places-to-visit-gangaramaya-temple.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="./assets/sri-lanka-colombo-best-places-to-visit-gangaramaya-temple.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="./assets/sri-lanka-colombo-best-places-to-visit-gangaramaya-temple.jpg" style="width:100%">
            </div>
        </div>
        <br>
        <div class="layout">
            <h3 id="explore" class="sub-heading">Project Eco-Clean</h3>
            <br>
            <div class="cta-section">
                <div class="img-cmc">
                    <img src="./assets/roadnetwork.jpg" alt="">
                </div>
                <article>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique reiciendis impedit provident, ullam mollitia perspiciatis officia hic, tempore neque, recusandae consectetur temporibus et odio illo?
                    </p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati iste soluta ipsa hic autem cupiditate reprehenderit velit dolor incidunt consequatur possimus molestiae fuga, quis tempora. Perspiciatis nulla corrupti explicabo possimus temporibus sapiente eum animi nostrum!
                    </p>
                    <br>
                    <a href="register.php"><button class="primary-btn">Become a GTF Member</button></a>
                </article>
            </div>
            <br>
            <h3 class="sub-heading">Garbage collection map</h3>
            <br>
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

                    
                    <?php
                    
                    for ($i = 0; $i < count($latArr); $i++) {
                        ?>

                        new google.maps.Marker({
                            position: {
                                lat: <?php echo $latArr[$i]; ?>,
                                lng: <?php echo $lngArr[$i]; ?>
                            },
                            map,
                            title: <?php echo $lngArr[$i]; ?>,
                        });

                        <?php
                    }

                    
                    ?>




                    // var tourStops = [
                    //     [{
                    //         lat: <?php echo $latArr[0]; ?>,
                    //         lng: <?php echo $lngArr[0]; ?>
                    //     }, "Kottawa"],
                    //     [{
                    //         lat: <?php echo $latArr[1]; ?>,
                    //         lng: <?php echo $lngArr[1]; ?>
                    //     }, "Nugegoda"],
                    //     [{
                    //         lat: <?php echo $latArr[2]; ?>,
                    //         lng: <?php echo $lngArr[2]; ?>
                    //     }, "Maradana"],
                    // ];

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
            <br>
            <h3 class="sub-heading">Articles</h3>
            <div class="posts">
                <?php include './server/getArticle.php' ?>
            </div>
            <br>
            <h3 id="about" class="sub-heading">About Us</h3>
            <div class="about">
                <div class="about-img">
                    <img src="./assets/Colombo_800x520-1.jpg" alt="">
                </div>
                <div class="about-content">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab inventore neque molestias iusto suscipit, sed libero esse ullam culpa ipsam tenetur omnis, aut quasi! Eveniet?
                    <br>
                    <h3 class="sub-heading">Vision</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque corporis earum sapiente corrupti at aut, voluptate dignissimos numquam veniam vel. Veniam nisi eius sunt repellat fuga tempora, hic ullam incidunt?
                    <br>
                    <h3 class="sub-heading">Mission</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nostrum aliquam nam quisquam accusantium magni officiis soluta expedita nemo, nobis, libero quibusdam nisi repellat ex dolor perferendis maiores saepe et
                </div>
            </div>
            <br>
            <h3 id="contact" class="sub-heading">Contact Us</h3>
            <div class="contact">
                <div class="about-content">
                    <ul>
                        <li><i class="fas fa-phone-alt"></i><span>011 412 1234, 076 212 1234</span></li>
                        <li><i class="fas fa-envelope"></i><span>ecocleaner@mail.com</span></li>
                        <li><i class="fas fa-map-marker-alt"></i><span>No. 12/3, street Road, City</span></li>
                    </ul>
                </div>
                <div class="about-img">
                    <img src="./assets/Colombo_800x520-1.jpg" alt="">
                </div>
            </div>
        </div>
        <br>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCinwbF4gUyRzEGXYpAf0lHyBW3wdYlDx4&callback=initMap&v=weekly" defer></script>

    <script src="./scripts/imgSlider.js"></script>
    <script src="https://kit.fontawesome.com/56016c02ef.js" crossorigin="anonymous"></script>
</body>

</html>