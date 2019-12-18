<?php
require "../_include/inc_config.php"; 
require "../_entite/tache.php";
extract($_GET);
deleteTache($id);

header("location:" . hlien("tache","index") );
?>