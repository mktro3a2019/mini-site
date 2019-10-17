<?php
session_start();
include_once "include/jeux_tab.php";

add_score($_POST["Pseudo"],$_POST["Score"]);

header("location:jeux.php");

