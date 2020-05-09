<!-- BARRE DE NAVIGUATION ECRAN ORDINATEUR -->
<nav>
    <div class="navbar-fixed grey darken-3">
        <a href="#modal_connexion" class="modal-trigger brand-logo right">
            <i class="large right material-icons">account_box</i>Connexion
        </a>
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
    <li><a href="#modal_connexion" class="modal-trigger toast-basic"><i class="material-icons">account_box</i>Connexion</a></li>
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