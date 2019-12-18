<h1>ToDo List pour <?php echo $_SESSION["ut_username"] ?></h1>

<table>
	<caption>
		<?php echo "<a href='" . hlien("tache", "edit", "&id=0") . "'>Ajouter une tache</a>"; ?>
	</caption>
	<thead>
		<tr>
			<th>Id</th>
			<th>Categorie</th>
			<th>Label</th>
			<th>Date</th>
			<th>Memo</th>
			<th>Utilisateur</th>
			<th>Archive</th>
			<th>Editer</th>
			<th>Supprimer</th>
		</tr>
	</thead>
	<tbody>
		<?php



		foreach ($data as $row) {
			$row = array_map("cb_htmlentities", $row);
			extract($row);
			if ($tac_archive = 1){
				$tac_archive = "archivee";
			}else{
				$tac_archive = "";
		}
			$tac_date_heure = strftime("%A %d %B %Y %H:%M", strtotime($tac_date_heure));


			echo "<tr>";
			echo "<td>$tac_id</td>";
			echo "<td>$cat_label</td>";
			echo "<td>$tac_label</td>";
			echo "<td>$tac_date_heure</td>";
			echo "<td>$tac_memo</td>";
			echo "<td>$ut_username</td>";
			echo "<td>$tac_archive</td>";
			echo "<td><a href='" . hlien("tache", "edit", "&id=$tac_id") . "'>Modifier</a></td>";
			echo "<td><a href='" . hlien("tache", "delete", "&id=$tac_id") . "'>Supprimer</a></td>";
			echo "</tr>";
		}
		?>
	</tbody>
</table>