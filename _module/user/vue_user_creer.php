	<h1>Utilisateur : Créer</h1>
        <form method="post" >			
                <input type="hidden" id="ut_id" name="ut_id" value="<?=$ut_id?>" >
                
				<p>
					<label>ut_id : </label><span><?=$ut_id?></span>
				</p>
				<p>
					<label for="ut_nom">ut_nom : </label>
					<input type="text" id="ut_nom" name="ut_nom" value="<?=$ut_nom?>" >
				</p>	
				<p>
					<label for="ut_prenom">ut_prenom : </label>
                    <input type="text" id="ut_prenom" name="ut_prenom" value="<?=$ut_prenom?>" >
                    
				</p>
				<p>
					<label for="username">username : </label>
                    <input type="text" id="username" name="username" value="<?=$ut_username?>" >
                    <?php if($username_libre==false){
                         echo "Ce nom d'utilisateur existe déja! Veuillez choisir un autre nom d'utilisateur. ";
                    } ?>
				</p>
                <p>
					<label for="passw">ut_passw : </label>
                    <input type="password" id="passw" name="passw" value="<?=$ut_passw?>" >
				</p>
			
				<p>
					<input type="submit" value="Enregistrer" name="Submit" >
					<a href='index.php'>Retour</a>
				</p>
			</form>

