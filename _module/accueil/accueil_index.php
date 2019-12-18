<?php
require "../_include/inc_config.php";
require "../_entite/user.php";
$message = "";
$valide = false;


    if (isset($_POST["Submit"])) {
        extract($_POST);
        $data=findAllUser();
       extract($data);
       //var_dump($data);
                
        for ($i = 0; $i < count($data); ++$i) {
            if ($username === $data[$i]["ut_username"] && password_verify('$passw', $data[$i]["ut_passw"])) {
              // if ($username === $data[$i]["ut_username"]) {
                $_SESSION["ut_id"] = $data[$i]["ut_id"];
                $_SESSION["ut_username"] = $data[$i]["ut_username"];
                $_SESSION["ut_profil"]= $data[$i]["ut_profil"];
                $valide = true;
            }
        }
        if ($valide == true) {

           /* if (isset($mem)) {
                setcookie("mem", $ut_username, time() + 365 * 24 * 3600);
            }*/
            header("location:" . hlien("tache","index") );
        } else {
            $message = "ACCES DENIED";
           }
    } else {

        $ut_username = "";
        $ut_passw = "";
        $ut_profil=2 ;
        if(!isset($_COOKIE["mem"])){
           // $_SESSION["ut_profil"]=2;
        }
    }



/*
//deconnexion
unset($_SESSION["ut_id"]);
session_destroy();
header("location:index.php");
*/



$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
