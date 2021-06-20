<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opérateurs d'erreure</title>
</head>
<body>
	<?php 
		$x=5; 	//on déclare une variable x et on l'affecte la valeur 5

		($y+=$x); 	// ici, il y a une erreur car on veut assigner directement à la variable y sa propre valeur +  celle de x, alors y n'a pas de valeur

		echo $y;
	 ?>
</body>
</html>