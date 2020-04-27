<header>
    <ul>
        <li onclick="displayHome()">Acceuil</li>
        <li onclick="displaySignUp()">Inscription</li>
        <li onclick="displaySignIn()">Connexion</li>
        <li onclick="displayGame()">Jeu</li>
        <?php
            if(isset($_SESSION['login'])) {
               echo '<li><a href="">Deconnection</a></li>';
            }
        ?>
    </ul>
</header>