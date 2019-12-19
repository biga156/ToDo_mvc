	<?php
require "../_include/inc_config.php";
require "../_entite/tache.php";
$ut_id=$_SESSION["ut_id"];
$ut_username=$_SESSION["ut_username"];
$data=findAllTache($ut_id);
var_dump($_SESSION) ;
$vue="../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
?>
