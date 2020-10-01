<?php
$root = "http://" . $_SERVER["HTTP_HOST"];
include("./includes/footer.php");
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>const page = "<?php echo $page ?>"</script>
<script src="<?php echo $root . "/assets/js/main.js" ?>"></script>