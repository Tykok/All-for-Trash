<?php
// Ici les constantes vers les différents dossiers principal, pour ne pas retaper les chemins à chaque fois
const control = 'control/control.';
const view = 'view/view.';
const model = 'model/';
const include_component = 'view/include/';
const img = 'lib/img/';
const js = 'lib/js/';
const css = 'lib/css/';
const modal = 'view/modal/modal.';
?>
<html>

<head>

    <title> All for trash </title>
    <link rel="shortcut icon" href='<?php echo img . "principaL/title_icone.ico"; ?>'>

    <!-- pour les icones de maerialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Jquery nécessaire pour certains effets -->
    <script type="text/javascript" src='<?php echo js; ?>jquery-3.2.1.min.js'></script>

    <!-- Bibliothéques materialize nécessaire aux styles et effets des différents composants webs -->
    <link rel="stylesheet" href="<?php echo css; ?>materialize.min.css">
    <script src="<?php echo js; ?>materialize.min.js"></script>


    <!-- Open Street Map -->
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />


    <!-- W3CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

    <?php
    // Ici on vérifie tout simplement si un pamramètres est présent ou non
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'principal';
    }


    // On switch sur la variable page afin de rediriger notre utilisateur ou l'on souhaite
    //ICI ON A LE PREMIER AIGUILLAGE POUR LE PREMIER PARAMETRE page DE L'URL
    switch ($page) {
        case 'detail':
            require_once(view . 'detail.php');
            break;
        default:
            require_once(control . 'principal_page.php');
            break;
    }


    require_once(include_component . 'footer.include.php')
    ?>
</body>

</html>