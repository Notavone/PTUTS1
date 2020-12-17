<?php
$page = "contact";

require '../vendor/autoload.php';

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();
$email = $_ENV['MAIL_LOGIN'];
$phpMailer = new PHPMailer(true);

if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    if (!preg_match("/.{2,}/", $prenom)) $ePrenom = "Ce champs doit contenir 2 caractères minimum";
}

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    if (!preg_match("/.{2,}/", $nom)) $eNom = "Ce champs doit contenir 2 caractères minimum";
}

if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
    if (!preg_match("/.*@.*\..*/", $mail)) $eMail = "Cette adresse mail n'est pas valide";
}

if (isset($_POST['sujet'])) {
    $sujet = $_POST['sujet'];
    if (!preg_match("/.{2,}/", $sujet)) $eSujet = "Ce champs doit contenir 2 caractères minimum";
}

if (isset($_POST['text'])) {
    $text = $_POST['text'];
    if (!preg_match("/.{2,}/", $text)) $eText = "Ce champs doit contenir 2 caractères minimum";
}

if (isset($_POST['tel'])) {
    $tel = $_POST['tel'];
    if (!empty($tel) && !preg_match("/[0-9]{10}/", $tel)) $eTel = "Ce format n'est pas reconnu";
}
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
    <?php if (!isset($ePrenom) && !isset($eNom) && !isset($eMail) && !isset($eSujet) && !isset($eText) && !isset($eTel) && isset($prenom) && isset($nom) && isset($mail) && isset($sujet) && isset($text)) :
        try {
            $phpMailer->SMTPDebug = SMTP::DEBUG_OFF;
            $phpMailer->isSMTP();
            $phpMailer->Host = $_ENV['MAIL_DSN'];
            $phpMailer->SMTPAuth = true;
            $phpMailer->Username = $email;
            $phpMailer->Password = $_ENV['MAIL_PSSWD'];
            $phpMailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $phpMailer->Port = 587;
            $phpMailer->CharSet = PHPMailer::CHARSET_UTF8;

            $phpMailer->setFrom($email, $prenom . " " . $nom);
            $phpMailer->AddAddress($email, "Self");
            $phpMailer->isHTML(true);
            $phpMailer->Subject = $sujet;

            $body = "<b>De : </b>" . $prenom . " " . $nom;
            if (!empty($tel)) $body = $body . "<br><b>Numéro de téléphone : </b>" . $tel;
            $body = $body . "<br><b>Adresse mail : </b>" . $mail . "<br><b>Texte : </b><br>" . $text;
            $phpMailer->Body = $body;
            if ($phpMailer->send()) : ?>
                <h1 class='heading-stylized text-center'>Message envoyé!</h1>
                <h2>Récapitulatif</h2>

                <h3>Vous êtes :</h3>
                <p><?php echo $prenom . " " . $nom ?></p>

                <h3>Votre adresse mail :</h3>
                <p><?php echo $mail ?></p>

                <?php if (!empty($tel)): ?>
                    <h3>Votre numéro de téléphone :</h3>
                    <p><?php echo $tel ?></p>
                <?php endif; ?>

                <h4>Sujet de votre mail :</h4
                <p><?php echo $sujet ?></p>

                <h4>Contenu de votre mail :</h4>
                <pre><?php echo $text ?></pre>
            <?php endif;
        } catch (Exception $e) {
            echo $e;
        } ?>
    <?php else: ?>
        <h1 class="heading-stylized text-center">Nous Contacter</h1>
        <form method="post" autocomplete="off">
            <h2>A propos de vous</h2>
            <div class="form-row">
                <div class="form-group col-12 col-md-6 col-lg-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="prenom">Prénom*</label>
                        </div>
                        <input class="form-control" type="text" id="prenom" name="prenom"
                               value="<?php if (isset($prenom)) echo $prenom ?>">
                    </div>
                    <?php if (isset($ePrenom)): ?>
                        <small class="text-warning"><?php echo $ePrenom ?></small class="text-warning">
                    <?php endif; ?>
                </div>

                <div class="form-group col-12 col-md-6 col-lg-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="nom">Nom*</label>
                        </div>
                        <input class="form-control" type="text" id="nom" name="nom"
                               value="<?php if (isset($nom)) echo $nom ?>">
                    </div>
                    <?php if (isset($eNom)): ?>
                        <small class="text-warning"><?php echo $eNom ?></small class="text-warning">
                    <?php endif; ?>
                </div>

                <div class="form-group col-12 col-lg-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="tel">Téléphone</label>
                        </div>
                        <input class="form-control" type="text" id="tel" name="tel"
                               value="<?php if (isset($tel)) echo $tel ?>">
                    </div>
                    <?php if (isset($eTel)): ?>
                        <small class="text-warning"><?php echo $eTel ?></small class="text-warning">
                    <?php endif; ?>
                </div>

                <div class="form-group col-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="mail">Adresse e-mail*</label>
                        </div>
                        <input class="form-control" type="text" id="mail" name="mail"
                               value="<?php if (isset($mail)) echo $mail ?>">
                    </div>
                    <?php if (isset($eMail)): ?>
                        <small class="text-warning"><?php echo $eMail ?></small class="text-warning">
                    <?php endif; ?>
                </div>
            </div>
            <h2>Que pouvons-nous faire pour vous ?</h2>
            <div class="form-row">
                <div class="form-group col-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="sujet">Sujet*</label>
                        </div>
                        <input class="form-control" type="text" id="sujet" name="sujet"
                               value="<?php if (isset($sujet)) echo $sujet ?>">
                    </div>
                    <?php if (isset($eSujet)): ?>
                        <small class="text-warning"><?php echo $eSujet ?></small class="text-warning">
                    <?php endif; ?>
                </div>

                <div class="form-group col-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="text">Contenu*</label>
                        </div>
                        <textarea class="form-control" name="text" id="text"
                                  rows="8"><?php if (isset($text)) echo $text ?></textarea>
                    </div>
                    <?php if (isset($eText)): ?>
                        <small class="text-warning"><?php echo $eText ?></small class="text-warning">
                    <?php endif; ?>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-outline-light">Valider</button>
                <button class="btn btn-outline-light">Remettre à zéro</button>
                <p class="text-center">Les champs suivis d'un <abbr title="*">astérisque</abbr> sont requis</p>
            </div>
        </form>
    <?php endif; ?>
</main>
<?php include("../includes/bodyEnd.php") ?>
</body>
</html>