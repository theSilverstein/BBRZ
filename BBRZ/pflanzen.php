<?PHP
	$host= "localhost";
	$user = "root";
	$pw = "";
	$db = "garten";
	
	$nr = $_POST['nr'];
	$bezeichnung = $_POST['bezeichnung'];
	$preis = $_POST['preis'];
	$action = $_POST['action'];
	print_r ($_POST);
	echo "<hr>";
	
	$conn = new mysqli($host, $user, $pw, $db);
	if($conn) echo "Verbindung OK <br>";
	else echo "Verbindung nicht OK <br>";
	
	//Einfügen
	if($action == "Einfuegen"){
		$sql = "INSERT INTO pflanzen VALUE($nr, '" .$bezeichnung. "', $preis)";
		$ergebnis = $conn->query($sql);
		if ($ergebnis) echo "Einfügen OK <br>";
		else echo "Einfügen nicht OK <br>";
	}
	
	
	//Ändern
	if($action == "Aendern"){
		$sql = "UPDATE pflanzen SET bezeichnung='" .$bezeichnung. "' , preis=$preis WHERE nr= $nr";
		$ergebnis = $conn->query($sql);
		if ($ergebnis) echo "Ändern OK <br>";
		else echo "Ändern nicht OK <br>";
	}
	
		//Löschen
	if($action == "Loeschen"){
		$sql = "DELETE FROM pflanzen WHERE nr= $nr";
		$ergebnis = $conn->query($sql);
		if ($ergebnis) echo "Löschen OK <br>";
		else echo "Löschen nicht OK <br>";
	}
	
	
	//Anzeige
	$sql = "SELECT * FROM pflanzen";	
	$ergebnis = $conn->query($sql);
	if ($ergebnis) echo "Abfrage OK <br>";
	else echo "Abfrage nicht OK <br>";
	
	while ($zeile = $ergebnis->fetch_object()) {
	echo $zeile->nr."  ".$zeile->bezeichnung ." ".$zeile->preis ."<br>";	
	}
	
	



?>
