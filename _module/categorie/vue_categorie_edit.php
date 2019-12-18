<h1>Categorie : Edit</h1>
        <form method="post" >			
                <input type="hidden" id="cat_id" name="cat_id" value="<?=$cat_id?>" >
                
				<p>
					<label>cat_id : </label><span><?=$cat_id?></span>
				</p>
				<p>
					<label for="cat_label">cat_label : </label>
					<input type="text" id="cat_label" name="cat_label" value="<?=$cat_label?>" >
				</p>	
							
				<p>
					<input type="submit" value="Enregistrer" name="Submit" >
					<input type="reset" value="Annuler" name="Reset" >
				</p>
			</form>
