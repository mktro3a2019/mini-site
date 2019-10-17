<div id="bandeau">
    <?php
        include_once "include/user.php";
        if(user_connected()) {
            echo htmlentities(user_name());
            ?>
            <a href="logout.php">Déconnexion</a>
            <?php
        } else {?>
            <a href="login.php">Se connecter</a> |
            <a href="signup.php">S'inscrire</a>
        <?php }
    ?>
</div>
<div id="barre_nav">
    <div id="logo_ens">
        <a href="./"><img src="images/logo_ens.png"/></a>
    </div>
    <div id="onglets">
        <a href="./">Accueil</a>
        <a href="liste_inscrits.php">Liste des inscrits</a>
		<a href="vie_asso.php">Vie associative</a>
		<a href="jeux.php">Jeux</a>
		<a href="http://www.ens-rennes.fr" target="_blank">Faux site ENS</a>
    </div>
</div>
<div id="header"></div>