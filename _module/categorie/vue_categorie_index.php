<h1>Categorie</h1>
<h2>Utilisateur actuelle : <?php echo $_SESSION["ut_username"] ?></h2>

<table>
	<caption>
		<?php echo "<a href='" . hlien("categorie", "edit", "&id=0") . "'>Ajouter un categorie</a>"; ?>
	</caption>
	<thead>
		<tr>
			<th>Id</th>
			<th>Label</th>
			<th>Editer</th>
			<th>Supprimer</th>
		</tr>
	</thead>
	<tbody>
		<?php

		foreach ($data as $row) {
			$row = array_map("cb_htmlentities", $row);
			extract($row);

			echo "<tr>";
			echo "<td>$cat_id</td>";
			echo "<td>$cat_label</td>";
			echo "<td><a href='" . hlien("categorie", "edit", "&id=$cat_id") . "'>Modifier</a></td>";
			echo "<td><a href='" . hlien("categorie", "delete", "&id=$cat_id") . "'>Supprimer</a></td>";
			echo "</tr>";
		}
		?>
	</tbody>
</table>