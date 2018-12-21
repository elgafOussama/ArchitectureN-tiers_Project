<?php

	// Verfier l'existance d'un utilisateur ' admin ' dans notre repertoire LDAP.
	// Si vrai : Rediraction vers la page admin pour la gestion des evenements.
	$user = $_POST["Username"];
	$pass = $_POST["Password"];
	$server = "localhost";
	$port = "389";
	$rootdn = "cn=". $user . ", dc=example, dc=com";
	$rootpw = $pass;
	echo "Connexion...<br>";
	$ds=ldap_connect($server);
	if ($ds==1)
	{
		$r=ldap_bind($ds,$rootdn,$rootpw);

		// on démarre une session
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session
		$_SESSION['admin'] = $user;

		header('Location: ../index.php');
  		exit();
	}
	else {
		echo "Impossible de se connecter au serveur LDAP";

	}
?>