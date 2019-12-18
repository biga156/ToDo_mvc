	<?php
	require "../_include/inc_config.php"; 
	require "../_entite/user.php";
    unset($_SESSION["ut_id"]);
	session_destroy();
	header("location:" . hlien("accueil","index") );
    ?>