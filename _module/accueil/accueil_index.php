<?php
require "../_include/inc_config.php";
require "../_entite/user.php";
$message = "";
$valide = false;
       ;

    if (isset($_POST["Submit"])) {
        extract($_POST);
        $sql = "select * from utilisateur where ut_username='$username' ";
        $res = $link->query($sql)->fetchALL();
        //extract($res);
        var_dump($passw);
       var_dump(password_verify($passw,$res[0]["ut_passw"]));
          if(count($res)==1){      
            //if (password_verify(trim($passw),$res[0]["ut_passw"])) {
            if ($passw==$res[0]["ut_passw"]) {
                // if ($username === $data[$i]["ut_username"]) {
                $_SESSION["ut_id"] = $res[0]["ut_id"];
                $_SESSION["ut_username"] = $res[0]["ut_username"];
                $_SESSION["ut_profil"]= $res[0]["ut_profil"];
                $valide = true;
            }else {
                $valide = false;
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
