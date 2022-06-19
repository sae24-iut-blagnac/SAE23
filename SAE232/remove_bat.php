<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:erreur.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Suppression d'un Bâtiment</title>
		<link rel="stylesheet" type="text/css" href="./styles/style.css" />
	</head>

	<body>
		<section> 
			<br />
			<form action="supp_bat.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Information sur le Batiment</legend>
					<br />
					<label for="nom">  Nom du Batiment à supprimer</label>
					<input type="text" name="BAT_NOM" id ="nom" />
					<br />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Valider" />
				</div>
			</form>
		</section>
	</body>
</html>
