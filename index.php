<?php
    session_start();
    require('/include/db.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>index</title>
    </head>
    <body>
        <?php 
            //header
            include('/include/header.php');
        ?>
        <main id ="container">

        </main>
        <?php
            //footer
            include('/include/footer.php');
        ?>
    </body>
    <script src="index.js"></script>
</html>