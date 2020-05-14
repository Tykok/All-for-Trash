<?php

// Notre menu
require_once(include_component . 'menu.include.php');


// On vérifie tout d'abord s'il est connecté
if (isset($_SESSION['user_info'])) {
    require_once(view . 'update_Account.php');
} else {
?>
    <script>
        M.toast({
            html: 'Vous n\'êtes pas connecté'
        });
        setTimeout(function() {
            $('#modal_connexion').modal('open');
        }, 1000);
    </script>
<?php
}



// Pied de page
require_once(include_component . 'footer.include.php');
?>