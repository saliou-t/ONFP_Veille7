<?php
	//connexion à la base de données

	$bdd = new PDO('mysql:host=localhost;dbname=devbackend-veille7','root', '');

	//notre requête d'insertion dans la base de données

	$modif = $bdd->exec("UPDATE clients SET prenom='Fallou', nom='DIEYE' WHERE id=9");
	echo "Nombre de ligne modifiée : " .$modif;

?>





