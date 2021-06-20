<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Les opérateurs de comparaison</title>
</head>
<body>
	<?php 
		var_dump(0 == "a"); 	//vrai
		var_dump("001" == "01"); 	//vrai
		var_dump("10" != "1e1"); 	// faux
		var_dump(100 === "100"); 	// faux

		var_dump(22 >= 19); 	//vrai
		var_dump( -20 < -23); 	//faux

	 ?>
</body>
</html>