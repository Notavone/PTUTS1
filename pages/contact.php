<?php
$page = "contact";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contact</title>
    <?php include("../includes/head.php") ?>
</head>
<body class="bg-dark text-white">
<?php include("../includes/navbar.php") ?>
<main class="container">
    <h1 class="heading-stylized text-center">Nous Contacter</h1>
    <form method="post" action="/pages/mail.php" autocomplete="off">
        <h2 class="heading-stylized">A propos</h2>
        <div class="form-row">
            <div class="form-group col-12 col-md-6 col-lg-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="prenom">Prénom*</span>
                    </div>
                    <input class="form-control" type="text" name="prenom" aria-label="Prénom" aria-describedby="prenom" required>
                </div>
            </div>

            <div class="form-group col-12 col-md-6 col-lg-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="nom">Nom*</span>
                    </div>
                    <input class="form-control" type="text" name="nom" aria-label="Nom" aria-describedby="nom" required>
                </div>
            </div>

            <div class="form-group col-12 col-lg-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="tel">Téléphone</span>
                    </div>
                    <input class="form-control" type="tel" name="tel" aria-label="Téléphone" aria-describedby="tel">
                </div>
            </div>

            <div class="form-group col-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="mail">Adresse e-mail*</span>
                    </div>
                    <input class="form-control" type="email" name="mail" aria-label="Email" aria-describedby="mail" required>
                </div>
            </div>
        </div>
        <h2 class="heading-stylized">Que pouvons-nous faire pour vous ?</h2>
        <div class="form-row">
            <div class="form-group col-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="sujet">Sujet*</span>
                    </div>
                    <input class="form-control" type="text" name="sujet" aria-label="Sujet"
                           aria-describedby="sujet" required>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="text">Contenu*</span>
                    </div>
                    <textarea class="form-control" name="text" aria-label="Contenu" aria-describedby="text" rows="8" required></textarea>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-outline-light">Valider</button>
            <button class="btn btn-outline-light">Remettre à zéro</button>
            <p class="form-text">Les champs suivis d'un <abbr title="*">astérix</abbr> son requis</p>
        </div>
    </form>
</main>
<?php include("../includes/bodyEnd.php") ?>
</body>
</html>