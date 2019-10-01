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
            <h1>Inscription</h1>
            <?php
                include "include/errors.php";
                print_error();
            ?>
            <form method="post" action="register.php">
                <label for="first_name">Prénom</label> <input type="text" name="first_name" id="first_name"/><br/>
                <label for="last_name">Nom</label> <input type="text" name="last_name" id="last_name"/><br/>
                <label for="promo">Promo</label> <input type="text" name="promo" id="promo"/><br/>
                <label for="email">Adresse e-mail :</label> <input type="text" name="email" id="email"/><br/>
                <label for="password">Mot de passe :</label> <input type="password" name="password" id="password"/><br/>
                <input type="submit" value="S'inscrire"/>
            </form>
            Déjà inscrit ? <a href="login.php">Connexion</a>
        </div>
        <?php include "template/footer.php"; ?>
    </body>
</html>