<?php
		// generer un JSON list des evenemnts pour un client
	require_once("../conn.php");

	$mail = $_POST["mail"];
	
	
	$return_arr = array();

	$fetch = mysqli_query($link,"SELECT e.* FROM inscription i,events e where i.idEvent = e.idEvents and i.email = '$mail';"); 

	while ($row = mysqli_fetch_array($fetch)) {
	    $row_array['evenement'] = $row['nom'];
	    $row_array['date'] = $row['date'];
	    $row_array['adresse'] = $row['adresse'];

	    array_push($return_arr,$row_array);
	}
    mysqli_close($link);

	echo json_encode($return_arr);
?>