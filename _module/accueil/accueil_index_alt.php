<?php
require "../_include/inc_config.php";
require "../_entite/user.php";
$message = "";
$valide = false;


    if (isset($_POST["Submit"])) {
        extract($_POST);
       
        $sql = "select * from utilisateur where ut_username=$ut_username ";
        $res = $link->query($sql)->fetchALL();
        extract($res);
          if(count($res==1)){      
            if (password_verify($passw, $res["ut_passw"])) {
              // if ($username === $data[$i]["ut_username"]) {
                $_SESSION["ut_id"] = $res["ut_id"];
                $_SESSION["ut_username"] = $res["ut_username"];
                $_SESSION["ut_profil"]= $res["ut_profil"];
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
        /*if(!isset($_COOKIE["mem"])){
           // $_SESSION["ut_profil"]=2;
        }*/
    }



/*
//deconnexion
unset($_SESSION["ut_id"]);
session_destroy();
header("location:index.php");
*/



$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
