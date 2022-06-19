<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:erreur.php");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Suppression d'un Capteur</title>
		 <link rel="stylesheet" type="text/css" href="./styles/MenuHamburger.css" media="screen" /> 
	</head>

	<body>
		<section> 
			<br />
			<form action="supp_capt.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Information sur le Capteur</legend>
					<br />
					<label for="nom"> Nom du Capteur à supprimer</label>
					<input type="text" name="CAPT_NOM" id ="nom" />
					<br />
				</fieldset>
				<div class="valid">
					<input type="submit" value="Valider" />
				</div>
			</form>
		</section>
	</body>
</html>
