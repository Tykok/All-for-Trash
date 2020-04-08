<!-- Sur le côté c'est un scrollspy
Il permet d'aller à une section de la page rapidement -->


<div class="row">
    <div class="col s12 m9 l10">
        <div id="presentation" class="section scrollspy">
            <p>
                Page de présentation de pourquoi ce site
                <br />
                D'ou vient l'idée
                <br />
                Les aspects juridiques
                <br />
                Ce qu'il faut savoir
                <br />
                Etc etc (mettre un peu tout ce qu'il faut savoir surtout ce qu'on a vu en EDM niveau légale)
            </p>
        </div>

        <div id="legal" class="section scrollspy">
            <p>Aspect légale </p>
        </div>

    </div>
    <div class="col hide-on-small-only m3 l2">
        <ul class="section table-of-contents">
            <li><a href="#presentation">Présentation</a></li>
            <li><a href="#legal">legal</a></li>
        </ul>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.scrollspy').scrollSpy();
    });
</script>