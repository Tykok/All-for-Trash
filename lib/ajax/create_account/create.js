var save = true; // Valeur de la checkbox au départ
function modify_Save() {
    save = !save; // Contraire du change
}



// Script d'instance pour ouvrir ensuite le modali
$(document).ready(function() {
    // instance pour le modal
    $('#modal_connexion').modal();



    // lors du clic sur SUBMIT
    $("#submit_form").click(function(e) {
        e.preventDefault();

        $.post(
            'lib/ajax/create_account/create.php', // Envoi à ce script PHP
            {
                name: $('#name').val(),
                surname: $('#surname').val(),
                email: $('#email').val(),
                login: $('#the_login').val(),
                password: $('#mdp').val(),
                confirm_password: $('#confirm_password').val(),
                save_action: save,
            },

            function(data) {
                if (data == 'insert_ok ;)') {


                    // On effectue un deuxième post Ajax pour connecter notre utilisateur
                    $.post(
                        'lib/ajax/connexion_user/connexion.php', // Envoi à ce script PHP
                        {
                            pseudo: $("#the_login").val(),
                            password: $("#mdp").val(),
                        },

                        function(data) {
                            if (data != 'Wrong ;)') {
                                M.toast({
                                    html: 'Vous êtes connecté'
                                })
                                setTimeout(function() {
                                    $('#the_account').html(data);
                                }, 2000);

                            } else {
                                M.toast({
                                    html: 'Problème lors de la connexion...'
                                })
                            }
                        },
                        'html'
                    );


                    // On implémente notre modal en Ajajx
                    $('#info_ajax').html('<div id="modal_create_Account" class="modal">' +
                        '<div class="modal-content center">' +
                        '<h4>Bienvenue à toi!!!</h4>' +
                        '<p>Bienvenue sur notre site All for trash et merci d\'avoir créer un compte ;) </p>' +
                        '</div>' +
                        '</div>');

                    // on l'instancie puis on l'ouvre
                    $('#modal_create_Account').modal();
                    $('#modal_create_Account').modal('open');

                } else {
                    M.toast({
                        html: data
                    })
                }
            },
            'html'
        );
    });


});