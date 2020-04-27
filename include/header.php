<?php
echo '
<header>
    <div onclick="displayHome()">Acceuil</div>
    <div onclick="displaySignIn()">Connexion</div>
    <div onclick="displayGame()">Jeu</div>
';
if(isset($_SESSION['login'])) {
    echo '<li><a href="">Deconnection</a></li>';
}
echo '
</header>
';        
?>