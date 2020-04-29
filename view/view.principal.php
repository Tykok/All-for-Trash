Idées pour la page principal :


<ul>
    <li>Image d'acceuil sur le tout haut du site</li>
    <li>Présentation des plus gros dépôts de déchets</li>
    <li>Présentation des utilisateurs les plus actifs</li>
    <li>Présentation des déchets les plus repérer</li>
    <li>Nb de connexion sur notre site</li>
    <li>Nb d'utilisateurs</li>

</ul>


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