<?php
$page = "analyse";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Présentation</title>
    <?php include("../includes/head.php") ?>
</head>
<body class="bg-dark text-white">
<?php include("../includes/navbar.php") ?>
<main class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="border-bottom pb-1 mb-3 text-center">Analyse du sondage</h1>
            <img src="/public/images/sondage1.png" class="float-left img-fluid w-50 mr-3 rounded-lg" alt="">
            <p>
                Nous avons réalisé un sondage, nous permettant de savoir si les personnes interrogées sont intéressées
                par la création d'un site d'échange
                et d'entraide entre étudiants, heureusement, beaucoup de personnes ont répondu présentes, ce qui nous a
                permis de récolter 48 avis complets sur le sujet.
            </p>
            <p>
                Nous voudrions tout d'abord remercier toutes ces personnes qui ont pris le temps de répondre à notre
                sondage. Nous avons donc eu des statistiques très précises
                à analyser et la grande majorité a contribué à la recherche très sérieusement.
            </p>
            <h3 class="border-bottom pb-1 mb-2">Information générales sur les personnes</h3>
            <p>
                Le sondage se fit partager notamment sur les systèmes de communication entre étudiants de l'IUT,
                notamment Discord. Comme la section informatique est composée en grande majorité
                d'hommes, 42 réponses ont été faites par des hommes. Concernant l'âge, on peut observer qu'une grande
                majorité des personnes ont entre 18 et 21 ans (42), âge moyen des personnes
                étudiant en DUT Informatique, rien de bien spécial jusque-là...
            </p>

            <h2 class="border-bottom pb-1 mb-2">Concept du site</h2>
            <img src="/public/images/sondage6.png" class="float-right img-fluid ml-2 w-50 mr-3 rounded-lg" alt="">
            <p>
                On peut tout d'abord noter un certain engouement pour le projet, 81% des personnes ayant répondu Oui.
                Nous avons d'ailleurs parlé dans notre rapport du public visé par la création d'un site du genre
                et ces réponses nous prouvent bien que les étudiants utiliseraient ce site plus qu'un autre, comme
                Leboncoin.
                Cet engouement est sûrement le résultat d'une confiance plus élevée entre les élèves du même IUT par
                rapport
                à de parfaits inconnus.

            </p>
            <img src="/public/images/sondage2.png" class="float-right img-fluid ml-2 w-50 mr-3 rounded-lg" alt="">
            <p>
                Pour la question "Si oui, de quelle manière ?", nous avons des réponses très intéressantes, car plutôt
                partagées. A peu près 1/3 des personnes interrogées
                ayant répondu "Oui" à la proposition de création d'un site de ce genre ont précisé qu'ils préféreraient
                que
                ce site soit au niveau national, c'est-à-dire que les étudiants de toute la France peuvent vendre et
                échanger
                entre eux. Une autre petite moitié des personnes préférerait une création d'un petit réseau local, à
                l'échelle de
                l'IUT. Pour ces personnes, il serait plus pratique de pouvoir se rencontrer en personne (hors crise de
                la COVID évidemment).
                Entre les deux extrémités, nous avons certaines personnes qui pensent à un réseau régional, sorte de
                juste milieu entre les deux
                autres solutions. Un réseau régional permettrait encore aux étudiants de se rencontrer tout en
                augmentant le nombre d'utilisateurs
                potentiels.
            </p>
            <p>
                Concernant l'utilisation que font les personnes interrogées des systèmes de vente d'occasion déjà
                existants, nous avons une majorité
                de personnes les utilisant pour vendre/acheter des objets de manière occasionnelle. Un autre quart de
                personnes n'utilise presque jamais
                voire jamais ces services. Ce qui est quand même intéressant, c'est de voir qu'une grande partie des
                étudiants utilisent -même si c'est de manière
                occasionnelle- ces services et qu'ils utiliseront sans doute ce même service, mais entre étudiants.
            </p>
            <h2 class="border-bottom pb-1 mb-2">Spécificités sur l'utilisation des sites de vente et d'échange en
                ligne</h2>
            <img src="/public/images/sondage3.png" class="float-left img-fluid ml-2 w-50 mr-3 rounded-lg" alt="">
            <p>
                Dans cette avant-dernière section, nous essayons de récupérer des avis plus précis concernant les sites
                semblables déjà disponibles.
                Nous demandons tout d'abord aux interrogés quelles sont leurs préférences au niveau choix du site.
                Évidemment, le site Leboncoin est
                le plus populaire, car le plus célèbre au niveau Français. Cependant, 22 personnes préfèrent se tourner
                vers Ebay ou Vinted, sites plus
                spécialisés mais moins connus. Le fait que Leboncoin se trouve grand gagnant vient de sa capacité à
                pouvoir gérer un grand nombre d'utilisateurs
                et d'annonces, le rendant très ergonomique et facile à utiliser, contrairement à certains de ses
                concurrents.
            </p>
            <p>
                50% des personnes interrogées déclarent préférer les virements bancaires de particulier en particulier,
                se basant donc grandement sur la confiance.
                Il faut savoir que Leboncoin a mis en place un système de paiement 100% sécurisé, permettant aux
                utilisateurs d'être remboursés au cas où l'objet n'arrive
                pas à destination et pour éviter les tentatives d'arnaques, beaucoup plus probables avec les systèmes de
                paiement de proche en proche. Un dernier quart de personnes
                préfèrent se voir en personne, transférer l'objet et l'argent en main propre, réduisant les chances
                d'arnaques à 0, mais le risque de rencontrer une
                personne louche est toujours là.
            </p>
            <img src="/public/images/sondage4.png" class="float-right img-fluid ml-2 w-50 mr-3 rounded-lg" alt="">
            <p>
                Finalement, nous terminons avec la notion de confiance que nous venons d'aborder. La confiance est
                différente lors d'un échange physique ou d'un
                envoi suivi d'une transaction virtuelle, nous avons ici laissé aux interrogés leur libre interprétation.
                Une majorité de personnes ont pourtant une
                assez grande confiance pour la personne à qui ils vendent/achètent un objet, ce qui explique le fait que
                de nombreuses personnes préfèrent les transactions
                via virement bancaire, se basant sur une confiance entre les deux personnes.
            </p>
        </div>
    </div>
</main>
<?php include("../includes/bodyEnd.php"); ?>
</body>
</html>