<h1>Génération du jeu de données</h1>
        <?php

        //création des utilisateurs
        echo "<h1>Création des utilisateur</h1>";
        $sql = "insert into utilisateur values ";
        $data = [];
        for ($i = 1; $i <= $nbutilisateur; $i++) {
            
            if($i==1){
                $ut_profil=1;
                $ut_nom = "admin";
                $ut_prenom = "admin";
                $ut_username="admin";
                $ut_passw="12345678";
            }else {
            $ut_nom = $faker->lastname;
            $ut_prenom = $faker->firstname;
            $ut_username = $ut_nom . "." . $dateMois;
            $ut_profil=0 ;
            $passw = [];
            for ($j = 1; $j <= $nb_caract; ++$j) {
                $nbr = strlen($caract);
                $nbr = mt_rand(0, ($nbr - 1));
                $passw[$j] = $nbr;
            }
        
            $ut_passw = password_hash(implode($passw), PASSWORD_DEFAULT);
        }
            $data[] = "(null,'$ut_nom','$ut_prenom','$ut_username','$ut_passw','$ut_profil')";
        }

        $link->query($sql . implode(",", $data));
           
        //création des taches
        echo "<h1>Création des taches</h1>";
        $sql = "insert into tache values";
        $data=[];
        for ($i = 1; $i <= $nbtache; ++$i) {
            $tac_label= "tache $i";            
            $date =  mktime(rand(6, 22), 0, 0, rand(1, 12), rand(1, 30), $dateAnnee);   
            $tac_date_heure = date("Y-m-d H:i:s", $date);
            $tac_categorie = rand(1, 8);
            $tac_memo= $faker->text(50);;
            $tac_archive= rand(0,1);
            $tac_utilisateur=rand(1, $nbutilisateur) ;
           
            $data[] = "(null,'$tac_label', '$tac_date_heure', '$tac_memo', '$tac_archive', '$tac_categorie', '$tac_utilisateur')";
        
        }
    
       $link->query($sql . implode(",",$data));        

        ?>