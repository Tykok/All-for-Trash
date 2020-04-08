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

    <!-- pour les icones de maerialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Jquery n"cessaire pour certains effets -->
    <script type="text/javascript" src='<?php echo js; ?>jquery-3.2.1.min.js'></script>

    <!-- Bibliothéques materialize nécessaire aux styles et effets des différents composants webs -->
    <link rel="stylesheet" href="<?php echo css; ?>materialize.min.css">
    <script src="<?php echo js; ?>materialize.min.js"></script>

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



    ?>
</body>

</html>