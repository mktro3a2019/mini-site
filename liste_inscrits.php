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
            <?php
                include_once "include/users.php";
                include_once "include/errors.php";
                
                print_error();
                
                $utilisateurs = get_users();
                
                if(user_connected()) { ?>
                <h2>Bienvenue, <?php echo htmlentities(user_name()); ?> !</h2>
                Votre cursus :
                <table>
                    <tr>
                        <th>Année</th>
                        <th>Intitulé</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $cursus = get_user_cursus($_SESSION["id"]);
                        foreach($cursus as $c) { ?>
                            <tr>
                                <td><?php echo $c["year"]; ?></td>
                                <td><?php echo htmlentities($c["name"]); ?></td>
                                <td><a href="del_cursus.php?id=<?php echo $c["id"]; ?>">Supprimer</a></td>
                            </tr>
                        <?php }
                    ?>
                    <form method="post" action="add_cursus.php">
                        <tr>
                            <td><input type="text" name="year"/></td>
                            <td><input type="text" name="name"/></td>
                            <td><input type="submit" value="Ajouter"/></td>
                        </tr>
                    </form>
                </table>
                <?php } ?>
            <h1>Liste des inscrits</h1>
            <table>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Cursus</th>
                    <th>Année</th>
                </tr>
                <?php
                    foreach($utilisateurs as $u) {
                        $cursus = get_user_cursus($u["id"]);
                        ?>
                        <tr>
                            <td><?php echo htmlentities($u["first_name"]); ?></td>
                            <td><?php echo htmlentities($u["last_name"]); ?></td>
                            <td><?php foreach($cursus as $c) {echo htmlentities($c["name"])."<br/>";} ?>
                            <td><?php foreach($cursus as $c) {echo $c["year"]."<br/>";} ?>
                        </tr>
                    <?php }
                ?>
            </table>
        </div>
        <?php include "template/footer.php"; ?>
    </body>
</html>