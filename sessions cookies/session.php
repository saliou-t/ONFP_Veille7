<?php 	
	session_start(); //on démarre une session

	//on crée des variables de session

	$_SESSION['Couleur_prefere'] = 'Rouge';
	$_SESSION['Plat_prefere'] = 'Mafé';
	$_SESSION['Prenom'] = 'Raheem';
	$_SESSION['Nom'] = 'Cissé';
	
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Les sessions</title>
 </head>
 <body>
 		<h1>Vou vous appelez <?php echo $_SESSION['Prenom']." ".$_SESSION['Nom'] ?> </h1>
 		<h3>Votre plat préférer est le <em> <?php echo $_SESSION['Plat_prefere'] ?></em></h3>

 <?php 
 	//destruction de la session

 	session_destroy();

  ?>
 </body>
 </html>

