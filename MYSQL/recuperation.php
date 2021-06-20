<?php
	//connexion à la base de données

	$bdd = new PDO('mysql:host=localhost;dbname=devbackend-veille7','root', '');

	//notre requête d'insertion dans la base de données

	$tableau = $bdd->query("SELECT * FROM clients");

	while($donnee = $tableau->fetch() ){
		echo $donnee['id']." : ".$donnee['prenom']." ".$donnee['nom']." ".$donnee['email']."<br>";
	};
?>






