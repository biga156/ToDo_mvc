<?php

require "../_include/inc_config.php";
require "../_entite/categorie.php";
$ut_id=$_SESSION["ut_id"] ;
$data=findAllCat();
$vue="../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
