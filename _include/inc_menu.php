<?php

if(isset($_SESSION["ut_profil"])){
    if($_SESSION["ut_profil"]==1){
    $menu=array(
        [hlien("accueil","index"),"Accueil"],    
        [hlien("tache","index"),"Tache"], 
        [hlien("user","index"),"Utilisateur"],    
        [hlien("categorie","index"),"Categorie"],    
        [hlien("database","creer"),"RAZ BDD"],
        [hlien("database","dataset"),"jeu de données"]
    );

    } else if($_SESSION["ut_profil"]==0) {
        $menu=array(
            [hlien("accueil","index"),"Accueil"],    
            [hlien("tache","index"),"Tache"], 
            [hlien("user","index"),"Modifier des parametre personnel"],  
        );
    
    }
}else{
    $menu=array(
        [hlien("user","creer"),"Créer compte"]
        
       
    );

}
?>
<div class="myflexMenu">
	<?php affiche_menu($menu); ?>		
</div>