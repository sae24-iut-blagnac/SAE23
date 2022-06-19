<?php
/* Connection scrypt to connect to data base */

  $id_bd = mysqli_connect("localhost","root","passroot","SAE23")
    or die("Connexion au serveur et/ou à la base de données impossible");

  /* Data gestion */
  mysqli_query($id_bd, "SET NAMES 'utf8'");

?>
