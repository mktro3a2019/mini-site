<?php
include_once "SQL_config.php";

$users_db = new mysqli($db_host, $db_user, $db_pass, $db_name);

$pepper = "du poivre";

function cypher_password($password) {
    global $pepper;
    return sha1($password.$pepper);
}

function add_user($email,$password,$first_name,$last_name) {
    global $users_db, $db_tables;
    // Vérification que l'utilisateur n'existe pas déjà
    $stmt = $users_db->prepare("SELECT COUNT(*) FROM ".$db_tables["users"]." WHERE email=?");
    $stmt->bind_param("s",$email);
    $count = $stmt->fetch();
    $stmt->close();
    if($count!=0) {
        throw new Exception("Utilisateur déjà existant.");
    } else {
        $stmt = $users_db->prepare("INSERT INTO ".$db_tables["users"]." (email,password,first_name,last_name) VALUES(?,?,?,?)");
        $stmt->bind_param("ssss",$email,cypher_password($password),$first_name,$last_name);
        $ret=$stmt->execute();
        $stmt->close();
        return $ret;
    }
}

function get_users() {
    global $users_db, $db_tables;
    $result = $users_db->query("SELECT id,first_name,last_name FROM ".$db_tables["users"]);
    $ret_a = [];
    while($ret=$result->fetch_array(MYSQLI_ASSOC)) {
        $ret_a[] = $ret; // équivalent à un push
    }
    $result->close();
    return $ret_a;
}

/*function get_users_from_year($year) {
    global $users_db, $db_tables;
    $stmt = $users_db->prepare("SELECT id,user,year,name FROM ".$db_tables["cursus"]." WHERE user=? ORDER BY year");
    $stmt->bind_param("i",$user);
    $stmt->execute();
    $result = $stmt->get_result();
    $ret_a = [];
    while($ret=$result->fetch_array(MYSQLI_ASSOC)) {
        $ret_a[] = $ret; // équivalent à un push
    }
    $stmt->close();
    return $ret_a;
}*/

function get_user($email,$password) {
    global $users_db, $db_tables;
    $stmt = $users_db->prepare("SELECT id,email,first_name,last_name FROM ".$db_tables["users"]." WHERE email=? AND password=?");
    $stmt->bind_param("ss",$email,cypher_password($password));
    $stmt->execute();
    $result = $stmt->get_result();
    $ret=$result->fetch_array(MYSQLI_ASSOC);
    $stmt->close();
    return $ret;
}

function get_user_cursus($user) {
    global $users_db, $db_tables;
    $stmt = $users_db->prepare("SELECT id,user,year,name FROM ".$db_tables["cursus"]." WHERE user=? ORDER BY year");
    $stmt->bind_param("i",$user);
    $stmt->execute();
    $result = $stmt->get_result();
    $ret_a = [];
    while($ret=$result->fetch_array(MYSQLI_ASSOC)) {
        $ret_a[] = $ret; // équivalent à un push
    }
    $stmt->close();
    return $ret_a;
}

function get_cursus_user($cursus) {
    global $users_db, $db_tables;
    $stmt = $users_db->prepare("SELECT user FROM ".$db_tables["cursus"]." WHERE id=?");
    $stmt->bind_param("i",$cursus);
    $stmt->execute();
    $result = $stmt->get_result();
    $ret=$result->fetch_array(MYSQLI_ASSOC);
    $stmt->close();
    return $ret["user"];
}

function add_cursus($user,$year,$text) {
    global $users_db, $db_tables;
    $stmt = $users_db->prepare("INSERT INTO ".$db_tables["cursus"]."(user,year,name) VALUES(?,?,?)");
    $stmt->bind_param("iis",$user,$year,$text);
    $ret = $stmt->execute();
    $stmt->close();
    return $ret;
}

function del_cursus($id) {
    global $users_db, $db_tables;
    $stmt = $users_db->prepare("DELETE FROM ".$db_tables["cursus"]." WHERE id=?");
    $stmt->bind_param("i",$id);
    $ret = $stmt->execute();
    $stmt->close();
    return $ret;
}

function get_years() {
    global $users_db, $db_tables;
    $result = $users_db->query("SELECT DISTINCT year FROM ".$db_tables["cursus"]);
    $ret_a = [];
    while($ret=$result->fetch_array(MYSQLI_ASSOC)) {
        $ret_a[] = $ret["year"]; // équivalent à un push
    }
    $result->close();
    return $ret_a;
}