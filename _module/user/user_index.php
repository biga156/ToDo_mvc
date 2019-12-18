<?php

require "../_include/inc_config.php";
require "../_entite/user.php";
$ut_id=$_SESSION["ut_id"];
$data=findAllUser();

$vue="../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";


?>
