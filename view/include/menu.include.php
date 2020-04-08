<!-- BARRE DE NAVIGUATION ECRAN ORDINATEUR -->
<nav>
    <div class="navbar-fixed grey darken-3">
        <a href="index.php" class="brand-logo">
            <img class="responsive-img" src='<?php echo img . "trash-logo.jpg"; ?>' width="285" >
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">

            <li><a href="?" class="toast-basic">Acceuil</a></li>


        </ul>
    </div>
</nav>


<!-- BARRE DE NAVIGUATION MOBILE -->
<ul class="sidenav" id="mobile-demo">

    <li>
        <a href="index.php" style='background-color:black' class="brand-logo">
        <img class="responsive-img" src='<?php echo img . "trash-logo.jpg"; ?>' width="285" >
        </a>
    </li>

    <li><a href="?" class="toast-basic">Acceuil</a></li>
</ul>




<!--  Menu normal puis au format "hamburger" quand le format est plus petit -->
<script>
    // A appeler après l'appel du JQuery!
    $(document).ready(function() {
        $('.sidenav').sidenav();
        $(".dropdown-trigger").dropdown();
    });
</script>