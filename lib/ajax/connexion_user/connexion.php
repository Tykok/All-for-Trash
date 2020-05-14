<?php
// Fichir regroupant tout les appels de classes
const classF = '../../../class/class.';
require_once(classF . 'include.php');


if (isset($_POST['pseudo']) && isset($_POST['password'])) {

    if (Connexion_select::verif_IdentifiantUser($_POST['pseudo'], $_POST['password'])) {



        $result = Connexion_select::get_InfoUser($_POST['pseudo'], $_POST['password']);
        $user = new User_log(
            $result['id_user'],
            $result['save_action'],
            $result['photo'],
            $result['nom'],
            $result['prenom'],
            $result['mail'],
            $result['adresse'],
            $result['tel']
        );

        // Démarrage d'une session (Comme on est en AJAX)
        session_start();
        // On serialize et on récupére notre objet dans une SESSION
        $_SESSION['user_info'] = serialize($user);

        // On recharge notre menu
?>
        <div class='right'>
            <?php echo $user->get_nom() . ' ' . $user->get_prenom(); ?>
        </div>
        <img src="<?php echo 'lib/img/profil_pic/' . $user->get_photo(); ?>" alt="Avatar" class=" right w3-circle responsive-img" width="9%">
<?php
    } else {
        echo "Wrong ;)";
    }
}
