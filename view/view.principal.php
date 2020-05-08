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

<div class='row center'>
    <h3>Dépôts effectués ce mois-ci</h3>
</div>
<!-- MAP OPEN STREET -->
<div class="row">
    <div class="col m10 s12 offset-m1">
        <div id="mapid" style="height: 100%;"></div>
    </div>
</div>




<br /> <br />

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

<div class="row">
    <div class="col s12 m10 offset-m1">
        <div class="card grey lighten-3">
            <div class="card-content">
                <span class="card-title center">Top 3 des trasheurs du mois</span>

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


    // Position sur la carte
    var mymap = L.map('mapid').setView([-21.15, 55.5], 11);


    // Marqueur sur la carte
    var marker = L.marker([-20.8954796, 55.4479147, 17]).addTo(mymap);
    // Pour la pop-up sur la carte
    marker.bindPopup("Petit Test");

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