<!-- BARRE DE NAVIGUATION ECRAN ORDINATEUR -->
<nav>
    <div class="navbar-fixed grey darken-3">

        <!-- Test qui permet d'afficher ou non le logo de connexion -->
        <?php
        if (isset($_SESSION['user_info'])) {
            $user = unserialize($_SESSION['user_info']);
        ?>
            <a class="modal-trigger brand-logo right" id='the_account'>
                <div class='right'>
                    <?php echo $user->get_nom() . ' ' . $user->get_prenom(); ?>
                </div>
                <img src="<?php echo img . 'profil_pic/' . $user->get_photo(); ?>" alt="Avatar" class=" right w3-circle responsive-img" width="9%">
            </a>
        <?php
        } else {
        ?>

            <a href="#modal_connexion" class="modal-trigger brand-logo right" id='the_account'>
                <i class="large right material-icons">account_box</i>Connexion
            </a>
        <?php
        }
        ?>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">

            <li><a href="?" class="toast-basic">Acceuil</a></li>

        </ul>
    </div>
</nav>


<!-- BARRE DE NAVIGUATION MOBILE -->
<ul class="sidenav" id="mobile-demo">

    <li>
        <a href="index.php" style='background-color:black' class="brand-logo">
            <img class="responsive-img" src='<?php echo img . "principal/trash-logo.jpg"; ?>' width="285">
        </a>
    </li>

    <li><a href="?" class="toast-basic">Acceuil</a></li>



    <!---
    Test de l'afichage du bouton CONNEXION ou DECONNEXION 
    -->
    <?php
    if (!isset($_SESSION['user_info'])) {
    ?>
        <li><a href="#modal_connexion" class="modal-trigger toast-basic">
                <i id="the_account" class="material-icons">account_box</i>Connexion</a>
        </li>
    <?php
    }
    ?>


    <?php
    if (isset($_SESSION['user_info'])) {
    ?>
        <li><a href="#modal_connexion" class="modal-trigger toast-basic">
                <i id="the_account" class="material-icons">power_settings_new</i>Déconnexion</a>
        </li>
    <?php
    }
    ?>


</ul>


<!-- Notre modal de connexion -->
<?php require_once(modal . 'connexion.html'); ?>

<!--  Menu normal puis au format "hamburger" quand le format est plus petit -->
<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
        $(".dropdown-trigger").dropdown();
    });
</script>
</div>