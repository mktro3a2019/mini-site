<?php
session_start();
include_once "include/users.php";
include_once "include/user.php";
include_once "include/errors.php";

if(user_connected()) {
    if(isset($_GET["id"]) && !empty($_GET["id"])) {
        if(get_cursus_user($_GET["id"])==$_SESSION["id"]) {
            if(!del_cursus($_GET["id"])) {
                log_error("Erreur de suppression.");
            }
        } else {
            log_error("Mauvais utilisateur.");
        }
    } else {
        log_error("Formulaire invalide.");
    }
} else {
    log_error("Non connecté.");
}
header("location:liste_inscrits.php");