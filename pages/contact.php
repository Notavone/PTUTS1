<?php
$title = "Contact";
$page = "navContact";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("../includes/head.php") ?>
</head>
<body class="bg-dark text-white">
<?php include("../includes/navbar.php") ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="border-bottom pb-1 mb-3">Formulaire de contact</h1>
                <form method="post" action="mail.php">
                    <div class="form-row">
                        <div class="form-group col-sm-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Prénom*</span>
                                </div>
                                <input type="text" name="prenom" class="form-control" required placeholder="David">
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nom*</span>
                                </div>
                                <input type="text" name="nom" class="form-control" required placeholder="Goodenough">
                            </div>
                        </div>
                        <div class="form-group col-12 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Téléphone</span>
                                </div>
                                <input type="text" name="tel" class="form-control" placeholder="0123456789"
                                       pattern="[0-9]{10}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">E-mail*</span>
                            </div>
                            <input type="text" name="mail" class="form-control" required
                                   placeholder="david.goodenough@exemple.com" pattern=".+@.+\..+">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Sujet*</span>
                            </div>
                            <input type="text" name="sujet" class="form-control" required
                                   placeholder="Super idée pour le projet">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="text" cols="30" class="form-control" placeholder="Entrez votre message"
                                  wrap="soft" spellcheck="true" rows="15" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-monospace font-weight-bold">Envoyer</button>
                        <button type="reset" class="btn btn-primary text-monospace font-weight-bold">Remettre à zéro
                        </button>
                        <br>
                        <small>Les champs suivis d'un astérix sont requis</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include("../includes/bodyEnd.php") ?>
</body>
</html>