<?php
	//connexion à la base de données

	$bdd = new PDO('mysql:host=localhost;dbname=devbackend-veille7','root', '');

	//notre requête d'insertion dans la base de données

	$req = $bdd->prepare("INSERT INTO clients (`prenom`,`nom`,`email`) VALUES (:prenom, :nom, :email)");
	$req->execute(array(
		'nom'=>'FAYE',
		'prenom'=>'Aaliou',
		'email'=>'faye440@gmail.com'
	));
	echo "Données ajouté";
?>




