<?php
require "../_include/inc_config.php";
require "../_entite/user.php";

$ut_id = 0;
$ut_nom = "";
$ut_prenom = "";
$ut_username = "";
$ut_passw = "";
$ut_profil = 0;
$username_libre = true;



if (isset($_POST["Submit"])) {
    extract($_POST);
    $sql = "select * from utilisateur where ut_username='$username' ";
    $res = $link->query($sql)->fetchALL();


    if (count($res) == 1) {
        $username_libre = false;
    } else {
        //$ut_passw = password_hash($passw, PASSWORD_DEFAULT);
        insertUser($ut_nom,$ut_prenom,$username,$ut_passw,$ut_profil);
        header("location:" . hlien("accueil", "index"));
    }
}



$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
