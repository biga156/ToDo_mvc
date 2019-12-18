<div class="myflex">
	<div>
		<a href="index.php"><img src="_images/HTML5.png" width="200"></a>
	</div>
	<div>
	
		<?php if(isset($_SESSION["ut_username"])){
			?><h1><?= $_SESSION["ut_username"]?>'s</h1> 
			<h1><?=$nomApplication?></H1>
			<?php echo "<a href='" . hlien("user", "deconnexion") . "'>Se déconnecter</a>"; 
		}else {
		?>
		<h1><?=$nomApplication?></H1>
		<?php } ?>
		<form method="post" action="recherche.php">
			<input type="text" id="chercher" name="chercher" value="" >
			<input type="submit" value="chercher" name="btChercher" >
		</form>
	</div>
</div>