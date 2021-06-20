<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>les assignations</title>
</head>
<body>
	<h1>Les opérateurs d'assignations</h1>

	<?php 
		echo "Un programme qui permet de faire la permutation entre deux nombres \n : ";
		
		$x = 14; 
		$y = 4;
		$z = 6;

		//les opérateurs d'asignation

		$x %= 2; 	// le reste de la division euclidienne de 14 par 2 vaut 0
		
		$y += 17; 	// y vaut maintenant 21
		
		$z += ($x -= $y); 	// equivaux à $z + ($x - $y)

		echo "x = ".$x.", y = ".$y.", z = ".$z."<br>";

		//concaténation

		$Machaine = "Je m'appelle : ";
		$Machaine.="Saliou TALLA" ; //La variable $Machaine contient maintenant "Je m'appelle : Saliou TALLA"

		echo $Machaine;
	 ?>
</body>
</html>
