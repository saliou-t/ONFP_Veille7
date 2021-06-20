<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Les opéateurs sur les bits</title>
</head>
<body>
	<?php 
		$a = 10110100;  
		$b = 10011011;

		$c = $a & $b;

		echo $a ."<br>".$b."<br>";

		function conversion($dec){
			// $dec = 101;
		    while ($dec>=1){
		    	$bin = $dec % 2;
		    	$dec = round($dec/2, 0, PHP_ROUND_HALF_DOWN);
    			print "$bin";
			}
		};
		conversion($c);
	?>
</body>
</html>