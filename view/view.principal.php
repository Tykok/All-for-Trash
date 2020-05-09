<header id="head">
    <div class="w3-display-container">
        <img class="w3-image w3-opacity " src="<?php echo img . 'principal/vue_principal/first_pic.jpg'; ?>" alt="Trash pic" style="width:100%; height:45em;">
        <div class="w3-display-middle w3-large w3-wide w3-text-dark w3-center">
            <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">All for trash</h1>
            <h5 class="w3-hide-large" style="white-space:nowrap">
                <h2 class="lead">Bienvenue sur le site de recensement des déchets</h2>
            </h5>
        </div>
    </div>
</header>

<br /> <br />

<div class="row center">
    <h4>
        <p>
            All for Trash est une application de Tracking des déchets sauvage.
        </p>
        <p>
            Comme Waze permettant de signaler un embouteillage ou un accident, All for Trash permet le signalement des dépôts de déchets.
        </p>
    </h4>
</div>

<br /> <br />
<!-- CARTE -->
<div class="row center">
    <div class="col s12">
        <div class="card grey lighten-3">
            <div class="card-content">
                <span class="card-title center">Dépôts effectués ce mois-ci</span>
                <br />
                <div class="row">
                    <div class="col m10 s12 offset-m1">
                        <div id="mapid" style="height: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<br /> <br />
<!-- Top 3 des déchets du mois -->
<div class="row">
    <div class="col s12 m10 offset-m1">
        <div class="card grey lighten-3">
            <div class="card-content">
                <span class="card-title center">Top 3 des déchets du mois</span>

                <div class="row">
                    <div class="col s4">
                        Podium 2
                    </div>
                    <div class="col s4">
                        Podium 1
                    </div>
                    <div class="col s4">
                        Podium 3
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<br /> <br />

<!-- Partie du TOP 3 Users -->
<div class="row">
    <div class="col s12 m10 offset-m1">
        <div class="card grey lighten-3">
            <div class="card-content">
                <span class="card-title center">Top 3 des trasheurs du mois</span>

                <br /> <br />

                <div class="row center">
                    <div class="col s4">
                        <h3>2<sup>ème</sup></h3>
                        <br />
                        <?php
                        if (isset($topUser[1])) {
                            $user = $topUser[1];
                            echo "<img class='responsive-img' src='" . $user[1]->get_photo() . "' alt='Deuxième utilisateur du mois'>";
                            echo "<br/><br/>";
                            echo $user[0] . ' signalements ce mois-ci';
                        } else {
                            echo '<img class="responsive-img" src="' . img . 'principal/trash-logo.jpg" width="285" >';
                            echo "<br/><br/>";
                            echo 'Aucun utilisateur concerné';
                        }
                        ?>
                    </div>
                    <div class="col s4">
                        <h3>1<sup>er</sup></h3>
                        <br />
                        <?php
                        if (isset($topUser[0])) {
                            $user = $topUser[0];
                            echo "<img class='responsive-img' src='" . $user[1]->get_photo() . "' alt='Premier utilisateur du mois'>";
                            echo "<br/><br/>";
                            echo $user[0] . ' signalements ce mois-ci';
                        } else {
                            echo '<img class="responsive-img" src="' . img . 'principal/trash-logo.jpg" width="285" >';
                            echo "<br/><br/>";
                            echo 'Aucun utilisateur concerné';
                        }
                        ?>
                    </div>
                    <div class="col s4">
                        <h3>3<sup>ème</sup></h3>
                        <br />
                        <?php
                        if (isset($topUser[2])) {
                            $user = $topUser[2];
                            echo "<img class='responsive-img' src='" . $user[1]->get_photo() . "' alt='Troisième utilisateur du mois'>";
                            echo "<br/><br/>";
                            echo $user[0] . ' signalements ce mois-ci';
                        } else {
                            echo '<img class="responsive-img" src="' . img . 'principal/trash-logo.jpg" width="285" >';
                            echo "<br/><br/>";
                            echo 'Aucun utilisateur concerné';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<br /> <br />

<div class="row">
    <div class="col s12 m10 offset-m1">
        <div class="card grey lighten-3">
            <div class="card-content">
                <span class="card-title center">Informations relatives aux site</span>

                <div class="row">
                    <div class="col s6">
                        Nombre d'utilisateurs :
                    </div>
                    <div class="col s6">
                        Nombre de connexions :
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<script>
    //----------------------------------------------------------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------------------------------------------------
    // SCRIPT DE GENERATION OPEN STREET MAP


    // Position sur la carte (Mettre la Réunion en gros)
    var mymap = L.map('mapid').setView([-21.15, 55.5], 11);


    <?php // parcourt de la collection pour placer les différents marqueurs
    foreach ($month_depot as $unDepot) {
    ?>
        // Marqueur sur la carte
        var marker = L.marker([<?php echo $unDepot->get_longitude() . ',' . $unDepot->get_latitude(); ?>]).addTo(mymap);
        // Pour la pop-up sur la carte
        marker.bindPopup("<?php echo $unDepot->get_name(); ?>");
    <?php
    }
    ?>
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 25,
        id: 'mapbox/streets-v11'
    }).addTo(mymap);
    //----------------------------------------------------------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------------------------------------------------
</script>




<!--- A CONSERVER POUR LA SUITE 



<h3>Gélocalisation de l'utilisateur</h3>
<p id="demo"></p>







<script>
    function geo_success(position) {
        showPosition(position);
    }

    function geo_error() {
        alert("Sorry, no position available.");
    }

    var geo_options = {
        enableHighAccuracy: true,
        maximumAge: 30000,
        timeout: 27000
    };

    var wpid = navigator.geolocation.watchPosition(geo_success, geo_error, geo_options);

    function showPosition(position) {
        $('#demo').html("Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude);
    }
</script>

-->