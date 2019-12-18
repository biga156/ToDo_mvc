	<?php
    unset($_SESSION["ut_id"]);
	session_destroy();
	header("location:index.php");
    ?>