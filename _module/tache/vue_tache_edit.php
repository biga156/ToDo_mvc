<h1>Tache List : Edit</h1>
        <form method="post">			
                <input type="hidden" id="tac_id" name="tac_id" value="<?=$tac_id?>" >
				<input type="hidden" id="ut_id" name="ut_id" value="<?=$_SESSION["ut_id"]?>" >
				<p>
					<label>tac_id : </label><span><?=$tac_id?></span>
				</p>
				<p>
					<label for="tac_label">tac_label : </label>
					<input type="text" id="tac_label" name="tac_label" value="<?=$tac_label?>" >
				</p>	
				<p>
					<label for="tac_date_heure">tac_date_heure : </label>
					<input type="text" id="tac_date_heure" name="tac_date_heure" value="<?=$tac_date_heure?>" >
				</p>
				<p>
					<label for="tac_memo">tac_memo : </label>
					<textarea id="tac_memo" name="tac_memo" cols="50" rows="4"><?=$tac_memo?></textarea>
				</p>
				<p>
					<label for="tac_categorie">tac_categorie : </label>
					<select id="tac_categorie" name="tac_categorie">
                    
                    <?php HTMLselect($link,"select cat_id id,cat_label label from categorie",$tac_categorie); ?>
					</select>
				</p>
				<p>
					<label for="tac_archive">tac_archive : </label>
					<input type="checkbox" id="tac_archive" name="tac_archive" <?=($tac_archive!=0)?"checked":""?> value="<?=$tac_archive?>" >
				</p>
			
				<p>
					<input type="submit" value="Enregistrer" name="Submit" >
					<input type="reset" value="Annuler" name="Reset" >
				</p>
			</form>