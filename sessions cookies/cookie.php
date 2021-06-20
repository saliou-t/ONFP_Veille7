<?php 
	//création de notre cookie
	setcookie('Nom', 'KA', time() + 31536000);

	//un autre cookie
	setcookie('Prenom', 'OUZ', time() + 31536000 );

	//modifier un cookie
	setcookie('Nom', 'TALLA', time() + 31536000);

	
	//affichage d'un cookie
	echo $_COOKIE['Nom']; //affiche normalement TALLA

	//suppréssion d'un cookie
	unset($_COOKIE['Nom']);

	echo $_COOKIE['Nom']; // affche une arreur


		
 ?>