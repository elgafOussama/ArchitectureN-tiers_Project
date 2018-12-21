<?php
   require_once("../conn.php");


	$action =  $_POST["action"];
	
	if($action == "Mod"){

		$sql = "update events 
				set 
					Nom = '" . $_POST['nomEvUpdated'] ."',
					Date = '" . $_POST['dateEvUpdated'] ."',
					Adresse = '" . $_POST['adressEvUpdated'] ."'
				where idEvents = " . $_POST["idEv"];

		if ($link->query($sql) === TRUE) {
			echo "Modifier Avec Succee";
		                                                               
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

	elseif($action == 'Supp'){
		$sql = "delete from events
				where idEvents = " . $_POST["idEv"];

		if ($link->query($sql) === TRUE) {
			echo "Suppressier Avec Succee";
		                                                               
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
	}
?>