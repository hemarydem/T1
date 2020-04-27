<?php
    session_start();
    require('include/db.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <link href="style/headerCss.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            //header
            include('include/header.php');
        ?>
        <main id ="container">

        </main>
        <?php
            //footer
            include('include/footer.php');
        ?>
    </body>
    <script src="script/index.js"></script>
</html>