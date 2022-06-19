
<!DOCTYPE html>
<html lang="fr">
 <head>
 <link rel="stylesheet" type="text/css" href="./styles/MenuHamburger.css" media="screen" /> 
 <link rel="stylesheet" type="text/css" href="./styles/PiedFixe.css" media="screen" />
  <link rel="icon" href="./images/initiales.jpg" />
  <title> Administrateur </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Pour bien gérer le RWD -->
  <meta name="author" content="Nathan wati bg" />
  <meta name="description" content="SAE23" />
  <meta name="keywords" content="HTML, CSS" />
 </head>


 <body>
 
 <header>Supression d'un capteur</header>
    <!-- Il faut placer la balise de fermeture </header> ici pour utiliser correctement le style1.css -->
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
<?php
	
        include("SAE23.php");
		$CAPT_NOM = $_POST['CAPT_NOM'];
		$requete = "DELETE FROM `MESURE` WHERE `CAPT_NOM` = '$CAPT_NOM'";
		$resultat = mysqli_querry($id_bd, $requete)
			or die("La requête n'a pas pu être effectuée : $requete");
		mysql_close($id_bd);

		echo '<div class="ajout">';
		echo "Le batiment à été supprimé";
		echo "<ul>
				<li> Nom du Capteur : $CAPT_NOM </li>;
			</ul>
			</div>";
?>
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
