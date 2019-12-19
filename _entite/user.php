<?php

function delete($id) {
    global $link;
    $sql="delete from tache where tac_utilisateur=$id";
    $link->query($sql);      
    $sql="delete from utilisateur where ut_id=$id";
    $link->query($sql);       
}

function insertUser($nom,$prenom,$username,$passw,$profil) {    
    global $link;
    //$password = password_hash($passw, PASSWORD_DEFAULT);
    $password= $passw ;
    $sql="insert into utilisateur values (null,'$nom','$prenom','$username','$password','$profil')";
    $link->query($sql);      
}

function updateUser($id,$nom,$prenom,$username,$passw) {
    global $link;
    $password = password_hash($passw, PASSWORD_DEFAULT);
     $sql="update utilisateur set ut_nom='$nom',ut_prenom='$prenom',ut_username='$username', ut_passw='$password' where ut_id=$id";
    $link->query($sql);      
}

function findById($id) {
    global $link;
    $sql="select * from utilisateur where ut_id=$id";
    $res = $link->query($sql)->fetch();
    return array_map("cb_htmlentities",$res);
}

function findAllUser() {
    global $link;
    $sql="select * from utilisateur ";
    //$res = $link->query($sql)->fetchAll();
  // return array_map("cb_htmlentities",$res);
    return $link->query($sql)->fetchAll();
}
