<div class="row center">
    <div class="col m10 offset-m1">
        <h2>Créer votre compte et rejoignez-nous ! </h2>
    </div>
</div>

<br/> 
<hr>
<br/>

<div class="row">
    <form class="col s12 m10 offset-m1">
        <h3 class="center">Informations personnel</h3>
        <div class="row">
            <div class="input-field col s6">
                <input id="name" type="text" class="validate" required>
                <label for="name">Nom</label>
            </div>
            <div class="input-field col s6">
                <input id="surname" type="text" class="validate" required>
                <label for="surname">Prénom</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" required>
                <label for="email">Email</label>
            </div>
        </div>


        <hr>
        <br />
        <h3 class="center">Identifiants de connexion</h3>
        <div class="row">
            <div class="input-field col s12">
                <input id="the_login" type="text" class="validate" required>
                <label for="the_login">Login</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="mdp" type="password" class="validate" required>
                <label for="mdp">Mot de passe</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="confirm_password" type="password" class="validate" required>
                <label for="confirm_password">Confirmer le mot de passe</label>
            </div>
        </div>

        <hr>
        <br />
        <div class="switch">
            <label>
                Enregistrer mes actions majeures effectuées sur ce site à des fins purement statistiques
                <input type="checkbox" checked onchange="modify_Save()">
                <span class="lever"></span>
            </label>
        </div>

        <br /> <br />
        <div class="row center">
            <a class="waves-effect waves-light btn" id='submit_form'>Créer mon compte</a>
        </div>
    </form>
</div>

<div class="info_ajax">
    <!-- Div destiné à l'ajax -->
</div>


<!-- Script pour l'ajax -->
<script src='lib/ajax/create_account/create.js'></script>