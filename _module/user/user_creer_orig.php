<?php
require "../_include/inc_config.php";
require "../_entite/user.php";

$ut_id=0;
$ut_nom="";
$ut_prenom="";
$ut_username="";
$ut_passw="";
$ut_profil=0;
$username_libre=true ;

     

 if (isset($_POST["Submit"])){	
    extract($_POST);
    $res=findAllUser();
    extract($res);
   
   for($i=1; $i<count($res); ++$i) {
	if ($username===$res[$i]["ut_username"]) {
         $username_libre=false ;
    } 
}
    if($username_libre==true) {
        insertUser($ut_nom,$ut_prenom,$username,$ut_passw,$ut_profil) ;
        header("location:" . hlien("accueil","index") );
    }

	
 }
 $vue="../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
