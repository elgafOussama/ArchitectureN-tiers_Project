 <?php
	$servername = "localhost";
	$username = "root";
	$password = " ";
	$dbname = "eventDB";



	$nom =$_POST['nomEv'];
	$date=$_POST['dateEv'];
	$adress=$_POST['adressEv'];


	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO events (Nom, Date, Adresse) VALUES ('$nom', '$date', '$adress')";

	if ($conn->query($sql) === TRUE) {
		echo "Element Ajouter Avec Succee";
	                                                               
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	?> 
