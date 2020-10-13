<?php
$title = "Contact";
$page = "navContact";

function addInput($name, $class, $text, $required, $placeholder, $pattern)
{
    echo "<div class='form-group $class'>";
    echo "<div class='input-group'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text'>" . $text;
    if ($required) {
        echo "*";
    }
    echo "</span>";
    echo "</div>";
    echo "<input type='text' name='" . $name . "' class='form-control'";
    if ($required) {
        echo "required ";
    }
    echo "placeholder=\"$placeholder\"";
    if (!empty($pattern)) {
        echo "pattern=\"$pattern\"";
    }
    echo "></input>";
    echo "</div></div>";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("../includes/head.php") ?>
</head>
<body class="bg-dark text-white">
<?php include("../includes/navbar.php") ?>
<main class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="border-bottom pb-1 mb-3">Formulaire de contact</h1>
            <form method="post" action="mail.php">
                <div class="form-row">
                    <?php addInput("prenom", "col-sm-6 col-lg-4", "Prénom", true, "David", ""); ?>
                    <?php addInput("nom", "col-sm-6 col-lg-4", "Nom", true, "Goodenough", ""); ?>
                    <?php addInput("tel", "col-12 col-lg-4", "Téléphone", false, "0123456789", "[0-9]{10}"); ?>
                </div>
                <?php addInput("mail", "", "E-mail", true, "david.goodenough@exemple.fr", ".+@.+\..+"); ?>
                <?php addInput("sujet", "", "Sujet", true, "Demande d'information", ""); ?>
                <div class="form-group">
                        <textarea name="text" cols="30" class="form-control mail-text" wrap="soft" rows="12"
                                  placeholder="Entrez votre message" spellcheck="true" required></textarea>
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
</main>
<?php include("../includes/bodyEnd.php") ?>
</body>
</html>