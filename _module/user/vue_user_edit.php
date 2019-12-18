	<h1>Utilisateur : Edit</h1>
	<form method="post" >
	    <input type="hidden" id="ut_id" name="ut_id" value="<?= $ut_id ?>">
		
	    <p>
	        <label>ut_id : </label><span><?= $ut_id ?></span>
	    </p>
	    <p>
	        <label for="ut_nom">ut_nom : </label>
	        <input type="text" id="ut_nom" name="ut_nom" value="<?= $ut_nom ?>">
	    </p>
	    <p>
	        <label for="ut_prenom">ut_prenom : </label>
	        <input type="text" id="ut_prenom" name="ut_prenom" value="<?= $ut_prenom ?>">
	    </p>
	    <p>
	        <label for="ut_username">ut_username : </label>
	        <input type="text" id="ut_username" name="ut_username" value="<?= $ut_username ?>">
	    </p>
	    <p>
	        <label for="passw">ut_passw : </label>
	        <input type="password" id="passw" name="passw" value="<?= $ut_passw ?>">
		</p>
			<?php
				if($_SESSION["ut_profil"]==1){

					?>
					 <p>
					<label for="ut_profil">Admin : </label>
					<input type="checkbox" name="ut_profil" id="ut_profil" value="<?= $_SESSION["ut_profil"] ?>">
					</p>	
			<?php	}else {
				$ut_profil=0 ;
			}
			?>

	    <p>
	        <input type="submit" value="Enregistrer" name="Submit">
	        <input type="reset" value="Annuler" name="Reset">
	    </p>
	</form>