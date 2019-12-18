<?php

function deleteCat($id) {
    global $link;
    $sql="delete from tache where tac_categorie=$id";
    $link->query($sql);      
    $sql="delete from categorie where cat_id=$id";
    $link->query($sql);    
}

function insertCat($cat_label) {    
    global $link;
    $sql="insert into categorie values (null,'$cat_label')";
    $link->query($sql);      
}

function updateCat($cat_label, $cat_id) {
    global $link;
    $sql="update categorie set cat_label='$cat_label' where cat_id=$cat_id";
    $link->query($sql);      
}

function findCatById($id) {
    global $link;
    $sql="select * from categorie where cat_id=$id";
    $res = $link->query($sql)->fetch();
    return array_map("cb_htmlentities",$res);    
}

function findAllCat() {
    global $link;
    $sql = "select * from categorie";
    return $link->query($sql);
}
