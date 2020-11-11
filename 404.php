<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./includes/head.php") ?>
    <title>Erreur 404 !</title>
</head>
<body class="bg-dark text-white">
<main class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="border-bottom pb-1 mb-3">Oh non, cette page n'existe pas !</h1>
            <img class="img-fluid h-100 mb-4" src="/public/images/404_sad.png" alt="">
            <a class="d-block text-white text-monospace" href="/">Cliquez sur moi pour revenir à l'accueil</a>
        </div>
    </div>
</main>
<?php include("./includes/bodyEnd.php") ?>
</body>
</html>