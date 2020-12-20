<?php
$page = "accueil";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <?php include("./includes/head.php") ?>
</head>
<body class="bg-dark text-white">
<?php include("./includes/navbar.php") ?>
<main class="container" style="margin-bottom: 125px">
    <h1 class="heading-stylized text-center mt-4">Accueil</h1>
    <div class="text-center mt-4">
        <img class="shadow img-fluid" src="./public/images/accueil_intro.png" alt="">
        <p class="mt-3 text-center">Le but de notre projet à été d'analyser la création d'un système de ventes et d'échanges entre étudiants. Pour ce faire nous avons travailler
        pendant des semaines pour mettre en place toute une organisation de groupe, l'écriture sur différents aspects comme l'économie et le droit et la
        construction de ce site de présentation.</p>
    </div>

    <h3 class="text-center mt-5 mb-4">Présentation générale</h3>
    <div class="">
        <div class="">
            <p class="text-justify">Pour commencer, donnons un plus de détails à ce sujet qui, de premier abord, peut sembler vague. Étant tous étudiant au sein de ce projet
                et vivant tous dans un logement étudiant, nous voulions créer quelque chose qui pouvait rendre la vie des étudiants beaucoup plus facile. En effet, il peut être
                compliqué pour un étudiant de subvenir aux frais lorsqu'on emménage pour la première fois dans un logement.
            </p>
            <p class="text-justify">Nous avons donc voulu analyser toutes les étapes de la
                création d'un système permettant aux étudiants de vendre ou d'échanger des biens. De plus, un tel système permettrait de créer des interactions sociales entre les
                étudiants et leur permettre de s'intégrer beaucoup plus facilement dans les résidences étudiantes. Il faut savoir que l'entraide est très importante et si nous pouvons
                trouver un moyen de développer encore plus cette entraide il faut trouver des idées novatrices et notre projet en fait parti.
            </p>
        </div>
    </div>

    <h3 class="text-center mt-5 mb-3">Comment rendre réalisable ce projet ?</h3>
    <p class="text-center mb-4">Nous avons pu, grâce à notre <a href="./pages/analyse.php">sondage</a>, analyser les différentes envies des étudiants sur un tel sujet. Ceci
        nous a alors permis de mettre au point différentes options pour développer un système de ventes et d'échanges.</p>
    <div class="card-deck mb-4">
        <div class="card shadow-lg border-0" style="width: 18rem;">
            <img src="./public/images/accueil_website.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title text-info">Via un site internet</h5>
                <p class="card-text">La création d'un site internet tel un site de ventes entre particuliers pour faciliter l'échange.</p>
                <a href="#website" class="btn btn-primary" data-toggle="collapse" role="button">En savoir plus <i class="far fa-arrow-alt-circle-down"></i></a>
            </div>
        </div>
        <div class="card shadow-lg border-0" style="width: 18rem;">
            <img src="public/images/accueil_association.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title text-info">En créant une association</h5>
                <p class="card-text">Fondé une association permettant de mettre en relations les étudiants pour plus de sociabilité.</p>
                <a href="#association" class="btn btn-primary" data-toggle="collapse" role="button">En savoir plus <i class="far fa-arrow-alt-circle-down"></i></a>
            </div>
        </div>
        <div class="card shadow-lg border-0" style="width: 18rem;">
            <img src="./public/images/accueil_events.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title text-info">En faisant des évènements</h5>
                <p class="card-text">Organisé des évènement comme des petits marchés aux puces pour aider encore plus de monde.</p>
                <a href="#events" class="btn btn-primary" data-toggle="collapse" role="button">En savoir plus <i class="far fa-arrow-alt-circle-down"></i></a>
            </div>
        </div>
    </div>
    <div class="card collapse shadow mb-3" id="events">
        <div class="card-body">
            <h4 class="text-center mb-2">Mise en place d'évènements</h4>
            <p id="events" class="text-justify">Nous pouvons aussi organiser des évènements qui seraient en lien avec l'association. Ces évènements pourraient être dans le même style que les
                marchés aux puces ou que les braderies. Cela permettrait de faire venir du monde et avoir plus de dons d'objets pour les distribuer et permettrait aussi de faire connaître
                l'association afin de pouvoir aider encore plus d'étudiants. Les évènements pourront bien sûr fonctionner avec de la vente et des échanges.
            </p>
        </div>
    </div>
    <div class="card collapse shadow mb-3" id="association">
        <div class="card-body">
            <h4 class="text-center mb-2">Fondation d'une association</h4>
            <p class="text-justify">Nous pouvons aussi opter pour une option beaucoup plus traditionnelle même si la création d'une association pourrait être très efficace. En effet,
                les gens pourraient venir faire des dons d'objets et les étudiants qui en ont besoin viendraient les chercher. Un des problèmes de cette option est qu'il serait assez
                compliqué de mettre en place un système de vente et que l'association ne devrait marcher qu'avec un système de dons et d'échanges. Vous en serez plus en lisant notre
                <a href="./pages/droit.php">article sur l'aspect juridique</a> de notre projet.
            </p>
        </div>
    </div>
    <div class="card collapse shadow mb-5" id="website">
        <div class="card-body">
            <h4 class="text-center mb-2">Création d'un site internet</h4>
            <p class="text-justify">La création d'un site internet, basé sur le même principe que les sites de ventes entre particuliers, serait un atout pour le projet.
                En effet, cela permettrait aux étudiants d'effectuer des ventes et des échanges très rapidement et très simplement. De plus, tous les jeunes possèdent un smartphone et sont
                bien familiarisés avec le monde d'internet, cela les mettrait en confiance et ils pourraient échanger plus facilement.
            </p>
        </div>
    </div>

</main>
<?php include("./includes/bodyEnd.php") ?>
</body>
</html>