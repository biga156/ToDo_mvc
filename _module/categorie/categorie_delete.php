<?php
require "../_include/inc_config.php"; 
require "../_entite/categorie.php";
extract($_GET);
deleteCat($id);

header("location:" . hlien("categorie","index") );
?>