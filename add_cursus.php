<?php
session_start();
include_once "include/users.php";
include_once "include/user.php";
include_once "include/errors.php";

if(user_connected()) {
    if(isset($_POST["year"]) && !empty($_POST["year"]) && isset($_POST["name"]) && !empty($_POST["name"])) {
        if(!add_cursus($_SESSION["id"],$_POST["year"],$_POST["name"])) {
            log_error("Erreur d'insertion.");
        }
    } else {
        log_error("Formulaire invalide.");
    }
} else {
    log_error("Non connecté.");
}
header("location:liste_inscrits.php");