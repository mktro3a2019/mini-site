<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "template/head.php"; ?>
        <title>Alumni ou pas</title>
    </head>
    <body>
        <?php include "template/header.php"; ?>
        <div class="contenu">
            <h1>Connexion</h1>
            <?php
                include "include/errors.php";
                print_error();
            ?>
            <form method="post" action="check_login.php">
                <label for="email">Adresse e-mail :</label> <input type="text" name="email" id="email"/><br/>
                <label for="password">Mot de passe :</label> <input type="password" name="password" id="password"/><br/>
                <input type="submit" value="Se connecter"/>
            </form>
            Pas encore inscrit ? <a href="signup.php">Inscription</a>
        </div>
        <?php include "template/footer.php"; ?>
    </body>
</html>