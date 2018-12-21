<?php
	// adding event to client
	require_once("../conn.php");
	
	$nom =$_POST['nom'];
	$mail=$_POST['mail'];
	$ref =$_POST['ref'];

	$sql = "INSERT INTO inscription (nom, email, idEvent) VALUES ('$nom', '$mail', '$ref')";

	if ($link->query($sql) === TRUE) {
		echo "Element Ajouter Avec Succee";
	                                                               
	} else {
	    echo "Erreur: deja inscrit" ;
	}

	$link->close();
?>