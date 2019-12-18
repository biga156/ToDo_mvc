<?php
require "../_include/inc_config.php";
require "../_entite/user.php";
if (isset($_GET["id"])){
    
    $ut_id=$_GET["id"] ;
	if ($_GET["id"]>0)	{
       $res= findById($ut_id);
		extract($res);
	//$ut_profil=$_SESSION["ut_profil"] ;
        
	}else{
		$ut_id=0;
		$ut_nom="";
		$ut_prenom="";
        $ut_username="";
		$ut_passw="";
		$ut_profil=0 ;
		
	}	

} 

if (isset($_POST["Submit"])){	
	extract($_POST);
	if ($ut_id>0) {
        updateUser($ut_id,$ut_nom,$ut_prenom,$ut_username,$ut_passw,$ut_profil) ;
	} else {
        insertUser($ut_nom,$ut_prenom,$ut_username,$ut_passw, $ut_profil) ;
	
	}
	
	header("location:" . hlien("user","index") );
}

$vue="../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
