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
        //body
        include('/include/indexBody.php');
        //footer
        include('/include/footer.php');
    ?>
</body>
</html>