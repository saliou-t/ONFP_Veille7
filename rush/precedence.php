<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>La précédence</title>
</head>
<body>
	<?php 
		$x = 4;
		// cette ligne peut entraîner une sortie inattendue:
		echo "x moins un est égal " . $x-1 . ", en tout cas j'espère\n";
		// parce que c'est évalué comme la ligne suivante (antérieur à PHP 8.0.0) :
		echo (("x moins un est égal " . $x) - 1) . ", en tout cas j'espère\n";
		// la priorité désiré peut être renforcée en utilisant les parenthèses. :
		echo "x moins un est égal " . ($x-1) . ", en tout cas j'espère\n";	
	 ?>
</body>
</html>