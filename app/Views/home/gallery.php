<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeri - Lisboa Hotel</title>

    <meta name="keywords"
        content="Gordon Resort Hotel Abraka, Gordon Resort Hotel, McCarthy Beach, Beaches in Delta state, Beaches in Nigeria, beaches in Africa, beaches near me" />
    <meta name="description"
        content=" A picture may be worth a thousand words, but personal experience has no limit. So, after you check out our handsome guestrooms, stunning beach, and other details of our hotel resort, make your plans to check-in and start experiencing abraka." />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C1EVRTK6PD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-C1EVRTK6PD");
    </script>

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js"
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-NSMS76N");
    </script>
    <!-- End Google Tag Manager -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/media/favicon.png" type="image/x-icon" />

    <!-- Favicon -->
    <script src="https://kit.fontawesome.com/344589b924.js" crossorigin="anonymous"></script>

    <!-- Semantic UI CDN -->
    <link
        href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css"
        rel="stylesheet" type="text/css" />

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script
        src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js">
    </script>
    <style>
    #harita {
        border-style: solid;
        border-width: 2px;
        border-color: #000000;
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSMS76N" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <body>
    <!-- Header Navigation --> 
    <?php include "app/Views/parts/_header.php"?>

    <!-- header finish -->
        <br /><br />
        <section class="rooms-n-suites">
            <div class="container" style="margin-top: 100px">
                <div class="col-12" id="innerPageHeading"></div>
                <!-- Cottage -->
                <div class="row" id="room-row">
                    <div class="col-12 col-lg-6" id="left-room-col">
                        <div id="harita" class="col">
                            <br />
                            <div class="row">
                                <center>
                                    <div class="col-3 offset-2">
                                        <select id="start" class="form-select form-select-sm">
                                            <option value="istanbul">İstanbul</option>
                                            <option value="bursa">Bursa</option>
                                            <option value="kocaeli">Kocaeli</option>
                                            <option value="sakarya">Sakarya</option>
                                        </select>
                                    </div>
                                    <div class="col-3 offset-1">
                                        <select id="end" class="form-select form-select-sm">
                                            <option value="istanbul">İstanbul</option>
                                            <option value="bursa">Bursa</option>
                                            <option value="kocaeli">Kocaeli</option>
                                            <option value="sakarya">Sakarya</option>
                                        </select>
                                    </div>
                                </center>
                            </div>

                            <br />
                            <center>
                                <div style="height: 300px; width: 500px" id="map"></div>
                            </center>

                            <br />
                        </div>
                    </div>
                    <div class="col-12 col-lg-6" id="right-room-col">
                        <h2 class="header-h2 header-text">
                            Cottage <span class="price">(₦75,000 / night)</span>
                        </h2>

                        <div class="facilities-main">
                            <div class="left">
                                <div class="facilities">
                                    <img src="./assets/icons/family.svg" width="27px" alt="family" />
                                    <p>Family Size</p>
                                </div>

                                <div class="facilities">
                                    <img src="./assets/icons/bed.svg" width="27px" alt="Bedroom" />
                                    <p>2 Bedrooms</p>
                                </div>

                                <div class="facilities">
                                    <img src="./assets/icons/tissue.svg" width="27px" alt="Bathroom" />
                                    <p>2 Bathrooms</p>
                                </div>

                                <div class="facilities">
                                    <img src="./assets/icons/chair.svg" width="27px" alt="living-room" />
                                    <p>Living Room</p>
                                </div>

                                <div class="facilities">
                                    <img src="./assets/icons/dining.svg" width="27px" alt="dining" />
                                    <p>Dining Area</p>
                                </div>

                                <div class="facilities">
                                    <img src="./assets/icons/fridge.svg" width="27px" alt="fridge" />
                                    <p>Mini Fridge</p>
                                </div>

                                <div class="facilities">
                                    <img src="./assets/icons/parking.svg" width="27px" alt="parking" />
                                    <p>Parking</p>
                                </div>
                            </div>

                            <div class="right">
                                <div class="facilities">
                                    <img src="./assets/icons/cocktail.svg" width="27px" alt="cocktail" />
                                    <p>Mini Bar</p>
                                </div>

                                <div class="facilities">
                                    <img src="./assets/icons/ac.svg" width="27px" alt="AC" />
                                    <p>Air Conditioning</p>
                                </div>

                                <div class="facilities">
                                    <img src="./assets/icons/room-service.svg" width="27px" alt="room-service" />
                                    <p>Room Service</p>
                                </div>

                                <div class="facilities">
                                    <img src="./assets/icons/coffee.svg" width="27px" alt="coffee" />
                                    <p>Tea / Coffee</p>
                                </div>

                                <div class="facilities">
                                    <img src="./assets/icons/tv.svg" width="27px" alt="television" />
                                    <p>TV</p>
                                </div>

                                <div class="facilities">
                                    <img src="./assets/icons/beach.svg" width="27px" alt="beach" />
                                    <p>Beach Access (2 Per Room)</p>
                                </div>
                            </div>
                        </div>

                        <div class="facilities-btns">
                            <button class="yellow-btn" onclick="window.location.href = './accommodations/cottage.html'">
                                More Details
                            </button>
                            <button class="outline-btn" onclick="window.location.href = './bookings.html'">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
                <br /><br />

                <script>
                function initMap() {
                    var directionsService = new google.maps.DirectionsService();
                    var directionsDisplay = new google.maps.DirectionsRenderer();
                    var map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 7,
                        center: {
                            lat: 41.85,
                            lng: 29.07
                        }, // Merkez noktası İstanbul olarak ayarlandı.
                    });
                    directionsDisplay.setMap(map);

                    var onChangeHandler = function() {
                        calculateAndDisplayRoute(directionsService, directionsDisplay);
                    };
                    document
                        .getElementById("start")
                        .addEventListener("change", onChangeHandler);
                    document
                        .getElementById("end")
                        .addEventListener("change", onChangeHandler);
                }

                function calculateAndDisplayRoute(
                    directionsService,
                    directionsDisplay
                ) {
                    directionsService.route({
                            origin: document.getElementById("start").value,
                            destination: document.getElementById("end").value,
                            travelMode: "DRIVING",
                        },
                        function(response, status) {
                            if (status === "OK") {
                                directionsDisplay.setDirections(response);
                            } else {
                                window.alert("Directions request failed due to " + status);
                            }
                        }
                    );
                }
                </script>
                <!-- Replace YOUR_API_KEY with your actual Google Maps API key -->
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClyrDoeEHtaNe7yIp0hHI1H5nlf7MPkjc&callback=initMap">
                </script>

          
    <!-- Cookies -->
    <?php include "app/Views/parts/_cookies.php"?>
    <!-- Cookies End -->
    <!-- Footer -->
    <?php include "app/Views/parts/_footer.php"?>
    <!-- Footer End -->
    </body>
</body>

</html>