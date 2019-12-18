<?php
require "../_include/inc_config.php";
require "../_entite/categorie.php";
if (isset($_GET["id"])){
    
    $cat_id=$_GET["id"] ;
	if ($_GET["id"]>0)	{
		 $res= findCatById($_GET["id"]) ;
        extract($res);
	}else{
		$cat_id=0;
		$cat_label="";
		
    }
    
} 
 if (isset($_POST["Submit"])){	
	extract($_POST);
	if ($cat_id>0) {
		updateCat($cat_label,$cat_id);
    } else {
		insertCat($cat_label);
	}
	
	header("location:" . hlien("categorie","index") );
}

$vue="../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
