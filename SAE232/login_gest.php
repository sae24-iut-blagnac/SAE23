<?php
	// Démarrage de la session
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Gestion</title>
		<link rel="stylesheet" type="text/css" href="./styles/MenuHamburger.css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="./styles/PiedFixe.css" media="screen" />
	</head>

	<body>
		<header>Gestion</header>
   <nav>
  <div id="menu-hamburger">
    <!--
    Une case à cocher fausse / cachée est utilisée comme récepteur de clics
    -->
    <input type="checkbox" />
    
    <!--
   Les traits du hamburger menu.
    -->
    <span></span>
    <span></span>
    <span></span>

<!-- menu qui apparait après un clic sur le "hamburger"-->
<ul id="menu">
					<li><a href="./index.html" class="first">Accueil</a></li>
					<li><a href="./login_admin.php">Administration</a></li>
					<li><a href="./login_gest.php">Gestion</a></li>
					<li><a href="./consultation.php">Consultation</a></li>
					<li><a href="./MentionLégales.html" class="first">Mentions legales</a></li>
				</ul>
			</nav>
		<section>
			<p>
				<br />
				<em><strong>Gestion de la base : Accés limité aux personnes autorisées</strong></em>
				<br />
			</p>
			<form action="log_gest.php" method="post" enctype="multipart/form-data">
				<fieldset>
					                <label><b>Rentrer votre nom d'utilisateur</b></label>
                <input type="text" placeholder="Nom d'utilisateur" name="log" id="log" required>

                <label><b>Rentrer votre mot de passe</b></label>
                <input type="password" placeholder="Mot de passe" name="mdp" id="mdp" required>
<input type="submit" value="Valider" />
				</fieldset>
			</form>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<h6><img class= "image-responsive" src="./Images/test.jpg"/></h6>
		</section>
 		<footer>
    <ul>
	  <li>IUT de Blagnac</li>
	  <li>Etienne/Tudor/Maricaille</li>
      <li>Réseau et Telecom</li>
	</ul>  
  </footer>
    
	</body>
</html>

