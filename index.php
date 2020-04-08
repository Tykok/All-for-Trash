<html>

<head>

    <title> All for trash </title>

    <!-- pour les icones de maerialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Bibliothéques materialize nécessaire aux styles et effets des différents composants webs -->
    <link rel="stylesheet" href="lib/css/materialize.min.css">
    <script src="lib/js/materialize.min.js"></script>

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
    switch ($page) {

        case 'acceuil':
            require_once('acceuil');


        default:
            require_once('principal');
    }

    ?>

</body>

</html>