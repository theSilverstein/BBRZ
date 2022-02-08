<?PHP

	$conn = new mysqli("localhost", "root", "", "adressen");
	if($conn) echo "Verbindung OK <br>";
	else echo "Verbindung nicht OK <br>";
	
	$sql = "SELECT * FROM kurse";	
	$ergebnis = $conn->query($sql);
	if ($ergebnis) echo "Abfrage OK <br>";
	else echo "Abfrage nicht OK <br>";
	
	while ($zeile = $ergebnis->fetch_object()) {
	echo $zeile->nr."  ".$zeile->bezeichnung." ".$zeile->vortragenden." ".$zeile->stundenanzahl." ".$zeile->wochentag."<br>";	
	}




?>
