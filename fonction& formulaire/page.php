<?php 	
				
if (isset($_POST['penom'])&& isset($_POST['password'])) {
	$prenom	= $_POST['prenom'];
	$password = $_POST['password'];	
} else {
	$prenom	= "Coumba";
	$password = "fatoumat";
}
if ($prenom	!= "" && $password != "" ) {
	echo "bonjour <span style= 'color:red'>" .$prenom . "</span> your password is <span style= 'color:red'>" .$password . "<br>";
}else{
	include("rc1.php");
	echo "<span style= 'colr:red; font-size: 40px'> you must enter your prenom and password </span";
}

if (isset($_GET['penom'])&& isset($_GET['password'])) {
	$prenom	= $_GET['prenom'];
	$password = $_GET['password'];	
} else {
	$prenom	= "Coumba";
	$password = "fatoumat";
}
if ($prenom	!= "" && $password != "" ) {
	echo "bonjour <span style= 'color:red'>" .$prenom . "</span> your password is <span style= 'color:red'>" .$password . "<br>";
}else{
	include("rc1.php");
	echo "<span style= 'color:red; font-size: 40px'> you must enter your prenom and password </span";
}


function salut($prenom){
	if ($prenom != "") {
		return "prenom correct";
	}else {
		return "prenom incorrect";
	}
}
echo "salut"(coumbis);

foreach ( as $key => $value) {
	# code..
}