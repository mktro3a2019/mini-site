<?php

function user_connected() {
    return isset($_SESSION["email"]);
}

function user_name() {
    if(user_connected()) {
        return $_SESSION["first_name"]." ".$_SESSION["last_name"];
    }
    return "(Pas de nom)";
}