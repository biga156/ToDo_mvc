<?php
require "../_include/inc_config.php";
require "../_entite/tache.php";
$datetime = date("Y-m-d H:i:s");

if (isset($_GET["id"])) {

	$tac_id = $_GET["id"];
	if ($_GET["id"] > 0) {
		$res = findByIdTache($_GET["id"]);
		extract($res);
	} else {
		$tac_id = 0;
		$tac_label = "";
		$tac_date_heure = $datetime;
		$tac_memo = "";
		$tac_archive = "";
		$tac_categorie = "";
		$tac_utilisateur = "";
	}
} 
 if (isset($_POST["Submit"])) {
	extract($_POST);
	if ($tac_id > 0) {
		$tac_archive = (isset($tac_archive)) ? 1 : 0;
		updateTache($tac_id, $tac_label, $tac_date_heure, $tac_memo, $tac_archive, $tac_categorie, $tac_utilisateur);
	} else {
		$tac_archive = (isset($tac_archive)) ? 1 : 0;
		insertTache($tac_label, $tac_date_heure, $tac_memo, $tac_archive, $tac_categorie, $ut_id);
	}

	header("location:" . hlien("tache", "index"));
}

$vue = "../_module/{$module}/vue_{$module}_{$action}.php";
require "../_include/gabarit.php";
