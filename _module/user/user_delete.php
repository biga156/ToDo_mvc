<?php
require "../_include/inc_config.php"; 
require "../_entite/user.php";
extract($_GET);
delete($id);
header("location:" . hlien("user","index") );
?>