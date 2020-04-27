<header>
    <ul>
        <li><a href="/index.php">Acceuil</a></li>
        <li><a href="/signUp.php">Inscription</a></li>
        <li><a href="signIn.php">Connexion</a></li>
        <li><a href="Game.php">Jeu</a></li>
        <?php
            if(isset($_SESSION['login'])) {
               echo '<li><a href="">Deconnection</a></li>';
            }
        ?>
    </ul>
</header>