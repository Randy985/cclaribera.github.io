<?php
$path_name = TemplateController::path_name();
$path_name = "/";
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="es">

<?php include "modules/head.php" ?>

<body>
    <?php include "modules/preloader.php" ?>
    <div class="page text-center">

        <?php include "modules/header.php" ?>

        <?php

        if (isset($_GET['page'])) {
            if ($_GET['page'] == 'local') {
                include "pages/local/" . $_GET['page'] . ".php";
            } elseif ($_GET['page'] == 'food') {
                include "pages/food/" . $_GET['page'] . ".php";
            } elseif ($_GET['page'] == 'rental') {
                include "pages/rental/" . $_GET['page'] . ".php";
            } elseif ($_GET['page'] == 'gallery') {
                include "pages/gallery/" . $_GET['page'] . ".php";
            } else {
                echo '<script> window.location = "/" </script>';
            }
        } else {
            include "modules/banners.php";
            include "pages/home/home.php";
        }

        ?>
        <?php include "modules/footer.php" ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>