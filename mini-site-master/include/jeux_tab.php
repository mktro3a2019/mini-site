<?php
include_once "SQL_config.php";

$users_db = new mysqli($db_host, $db_user, $db_pass, $db_name);


function add_score($Pseudo,$Score) {
    global $users_db, $db_tables;
    // Vérification que l'utilisateur n'existe pas déjà
	$stmt = $users_db->prepare("INSERT INTO ".$db_tables["quizz"]." (Pseudo,Score) VALUES(?,?)");
	$stmt->bind_param("si",$Pseudo,$Score);
	$ret=$stmt->execute();
	$stmt->close();
	return $ret;
}

function get_score() {
    global $users_db, $db_tables;
    $result = $users_db->query("SELECT Pseudo,Score FROM ".$db_tables["quizz"]." ORDER BY Score DESC");
    $ret_a = [];
    while($ret=$result->fetch_array(MYSQLI_ASSOC)) {
        $ret_a[] = $ret; // équivalent à un push
    }
    $result->close();
    return $ret_a;
}