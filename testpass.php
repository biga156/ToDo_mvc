<?php
require "inc_config.php";
$mdp="gilles";
$mdp_hash=password_hash($mdp,PASSWORD_DEFAULT);
$saisie="gilles";
//var_dump(password_verify($saisie,$mdp_hash));
$sql="insert into utilisateur values (null,'gilles','gilles','gilles','$mdp_hash','1')";
$link->query($sql);  