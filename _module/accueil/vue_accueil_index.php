<h1>ToDo List Authentification</h1>

<hr>
    <h1><?php echo "$message"; ?></h1>
    <form method="post" >			
	<div>
        <p>
		<label for="username">username : </label>
		<input type="text" id="username" name="username">
    	</p>
    	<p>
	    <label for="passw">Mot de passe : </label>
		<input type="password" id="passw" name="passw">
        </p>
    </div>		
    <p>
		<label for="mem">Se souvenir de moi : </label>
		<input type="checkbox" name="mem" id="mem" value="1">
	</p>				
    <p>
		<input type="submit" value="Se connecter" name="Submit" >
		<?php echo "<a href='" . hlien("user", "deconnexion") . "'>Se déconnecter</a>"; ?>
		
	</p>

</form>