<?php
session_start();
include_once "include/users.php";
include_once "include/errors.php";

if($_SESSION=get_user($_POST["email"],$_POST["password"])) {
    header("location:index.php");
} else {
    log_error("Mauvais identifiant ou mot de passe");
    header("location:login.php");
}
