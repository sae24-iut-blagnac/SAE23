<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:erreur.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Création d'un nouveau Bâtiment</title>
		<link rel="stylesheet" type="text/css" href="./styles/MenuHamburger.css" media="screen" />
	</head>

	<body>

		<section> 
			<br />
			<form action="ajout_bat.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Information sur le Batiment</legend>
					<br />
					<label for="id">  ID du Batiment a ajouter</label>
					<input type="text" name="BAT_ID" id ="id" />
					<br />
					<label for="nom">  Nom du Batiment a ajouter</label>
					<input type="text" name="BAT_NOM" id ="nom" />
					<br />
					<label for="nomgest">  Nom du gestionnaire : </label>
					<input type="text" name="GEST_NOM" id ="nomgest" />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Valider" />
				</div>
			</form>
		</section>
	</body>
</html>
