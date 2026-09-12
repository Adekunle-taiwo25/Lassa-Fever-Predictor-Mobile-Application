<?php
    require_once('controllers/HomeController.php');
    $controller = new HomeController();
    if(!$controller->checkLoggedIn()){
        $controller->logout();
    }

    require_once('includes/header.php');
    require_once('includes/loader.php');
?>

<main>
    <div class="py-3 px-3 header-text">
        <h4>Welcome back Bidemi🥳. Here are some of the possible locations for Lassa Fever our model has 
            predicted🤓.
        </h4>
    </div>
    <div id="map" class="map"></div>
    
</main>

<?php
    require_once('includes/footer.php');
?>

<script>
    document.onreadystatechange = function () {
        if (document.readyState !== "complete") {
            document.querySelector("body").style.visibility = "hidden";
            document.getElementById("loader").style.visibility = "visible";

            var map = L.map('map').setView([0.7593806516704887, 0.2406193483295112], 8);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            var locations = [];

            <?php 
                $locations = $controller->getLocations();
                foreach($locations as $value){
                    $lon = $value['lon'];
                    $lat = $value['lat'];
                    $prob = $value['probability_score'];
                    echo "locations.push([$prob, $lat, $lon]);";
                }
            ?>
            
            for (var i = 0; i < locations.length; i++) {
                marker = new L.marker([locations[i][1], locations[i][2]])
                    .bindPopup("<b>Model Predicted Location</b><br>Coordinate: "+locations[i][1]+", "+locations[i][2]+"<br>Probabilty Score: "+locations[i][0])
                    .addTo(map);
            }
        } else {
            setTimeout(() => {
            document.getElementById("loader").style.display ="none";
            document.querySelector("body").style.visibility = "visible";
            }, 3000)
        }
    };
</script>

<script>
    
    
</script>