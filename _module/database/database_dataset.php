<?php
//composer require fzaninotto/faker
require "../_include/inc_config.php";
require_once '../vendor/autoload.php';
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create("fr_FR");

//les variables pour les dates actuelles
$timestamp = time();
$datetime = date("Y-m-d H:i:s");
$date = date("Y-m-d");
$dateAnnee = date("Y");
$dateMois = date("m");

$nbtache=30 ;
$nbutilisateur=10 ;

//passw
$caract = "abcdefghijklmnopqrstuvwyxz0123456789";
$nb_caract = 4;

$vue="../_module/{$module}/vue_database_dataset.php";
require "../_include/gabarit.php";

?>
