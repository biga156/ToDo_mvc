<?php

function deleteTache($id) {
    global $link;
    $sql="delete from tache where tac_id=$id";
    $link->query($sql);      
   
}

function insertTache($tac_label,$tac_date_heure,$tac_memo,$tac_archive,$tac_categorie,$tac_utilisateur) {    
    global $link;
    $sql="insert into tache values (null,'$tac_label','$tac_date_heure','$tac_memo','$tac_archive','$tac_categorie','$tac_utilisateur')";
	$link->query($sql);      
}

function updateTache($id,$label,$date_heure,$memo,$archive,$categorie,$user) {
    global $link;
    $sql="update tache set tac_label='$label',tac_date_heure='$date_heure',tac_memo='$memo', tac_archive=$archive,tac_categorie=$categorie, tac_utilisateur=$user where tac_id=$id";
    $link->query($sql);      
}

function findByIdTache($id) {
    global $link;
    $sql="select * from tache where tac_id=$id";
    $res = $link->query($sql)->fetch();
    return array_map("cb_htmlentities",$res);
}

function findAllTache($ut_id) {
    global $link;
    $sql = "select * from tache, categorie where tac_categorie=cat_id and tac_utilisateur='$ut_id' ";
    //$res = $link->query($sql)->fetchALL();
  // return array_map("cb_htmlentities",$res);
    return $link->query($sql)->fetchALL();
}
