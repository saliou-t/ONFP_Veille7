<?php
	$host = 'www.google.com'; 
    echo `ping -n 3 {$host}`; //on demande à php de nous exécuter la requête ping
?>