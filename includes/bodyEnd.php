<?php
$root = "http://" . $_SERVER["HTTP_HOST"];
?>
<footer class="fixed-bottom text-white-50 text-center p-3 shadow-lg bg-dark">
    <a href="https://github.com/Notavone/PTUTS1" class="m-2"><img
                src="https://img.icons8.com/material-sharp/48/FFFFFF/github.png"
                onmouseover="this.src='https://img.icons8.com/material-sharp/48/2a5395/github.png'"
                onmouseout="this.src='https://img.icons8.com/material-sharp/48/FFFFFF/github.png'"
                alt="Lien github"/></a>
    <a href="https://fr.wikipedia.org/wiki/Licence_publique_g%C3%A9n%C3%A9rale_GNU" class="m-2"><img
                src="https://img.icons8.com/material-sharp/48/FFFFFF/scales.png"
                onmouseover="this.src='https://img.icons8.com/material-sharp/48/2a5395/scales.png'"
                onmouseout="this.src='https://img.icons8.com/material-sharp/48/FFFFFF/scales.png'"
                alt="Licence"/></a>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>const page = "<?php echo $page ?>"</script>
<script src="<?php echo $root . "/assets/js/main.js" ?>"></script>