<?php
session_start();
include_once "include/users.php";
include_once "include/errors.php";

if($_SESSION=add_user($_POST["email"],$_POST["password"],$_POST["first_name"],$_POST["last_name"])) {
    $_SESSION=get_user($_POST["email"],$_POST["password"]);
    add_cursus($_SESSION["id"],$_POST["promo"],"1A mécatro");
    header("location:index.php");
} else {
    log_error("Erreur lors de l'inscription.");
    header("location:login.php");
}
