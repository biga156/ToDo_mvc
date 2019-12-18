<h1>Utilisateur</h1>
<h2>Utilisateur actuelle : <?php echo $_SESSION["ut_username"] ?></h2>

<table>
    <caption>
        <?php echo "<a href='" . hlien("user", "edit", "&id=0") . "'>Ajouter un utilisateur</a>"; ?>
    </caption>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Username</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
       
        foreach($data as $row) {
            $row=array_map("cb_htmlentities",$row);
            extract($row);

            echo "<tr>";
            echo "<td>$ut_id</td>";
            echo "<td>$ut_nom</td>";
            echo "<td>$ut_prenom</td>";
            echo "<td>$ut_username</td>";
            if($_SESSION["ut_profil"]==1){
                if($ut_id==1){
                echo "<td><a href='" . hlien("user", "edit", "&id=$ut_id") . "'>Modifier</a></td>";
                }else{
                echo "<td><a href='" . hlien("user", "edit", "&id=$ut_id") . "'>Modifier</a></td>";
                echo "<td><a href='" . hlien("user", "delete", "&id=$ut_id") . "'>Supprimer</a></td>";
                }
            }else {
                if($ut_id==$_SESSION["ut_id"]){
                    echo "<td><a href='" . hlien("user", "edit", "&id=$ut_id") . "'>Modifier</a></td>";
                    echo "<td><a href='" . hlien("user", "delete", "&id=$ut_id") . "'>Supprimer</a></td>";
                }else{
                    echo "<td>n.a.</td>" ;
                    echo "<td>n.a.</td>" ;
                    //echo "<td><a '" . hlien("user", "edit", "&id=$ut_id") . "'>Modifier</a></td>";
                    //echo "<td><a '" . hlien("user", "delete", "&id=$ut_id") . "'>Supprimer</a></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>