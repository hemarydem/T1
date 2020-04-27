<?php
    $db =   new PDO('mysql:host=localhost; dbname=deskT1', 'root','root',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch(Exeption $e){
    die('Error: ' . $e->getMessage);
}
?>