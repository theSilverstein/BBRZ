
<?PHP
	$host= "localhost";
	$user = "root";
	$pw = "";
	$db = "musik";
	
	$nr = $_POST['nr'];
	$interpret = $_POST['interpret'];
	$titel = $_POST['titel'];
	$preis = $_POST['preis'];
	$action = $_POST['action'];
	print_r ($_POST);
	echo "<hr>";
	
	$conn = new mysqli($host, $user, $pw, $db);
	if($conn) echo "Verbindung OK <br>";
	else echo "Verbindung nicht OK <br>";
	
	//Einfügen
	if($action == "Einfuegen"){
		$sql = "INSERT INTO musik VALUE($nr, '" .$interpret. "', '" .$titel. "', $preis)";
		$ergebnis = $conn->query($sql);
		if ($ergebnis) echo "Einfügen OK <br>";
		else echo "Einfügen nicht OK <br>";
	}
	
	
	//Ändern
	if($action == "Aendern"){
		$sql = "UPDATE musik SET interpret='" .$interpret. "' , titel='" .$titel. "' , preis=$preis WHERE nr= $nr";
		$ergebnis = $conn->query($sql);
		if ($ergebnis) echo "Ändern OK <br>";
		else echo "Ändern nicht OK <br>";
	}
	
		//Löschen
	if($action == "Loeschen"){
		$sql = "DELETE FROM musik WHERE nr= $nr";
		$ergebnis = $conn->query($sql);
		if ($ergebnis) echo "Löschen OK <br>";
		else echo "Löschen nicht OK <br>";
	}
	
	
	//Anzeige
	$sql = "SELECT * FROM musik";	
	$ergebnis = $conn->query($sql);
	if ($ergebnis) echo "Abfrage OK <br>";
	else echo "Abfrage nicht OK <br>";
	
	echo "<table border=2px solid black>";
	while ($zeile = $ergebnis->fetch_object()){
	echo "<tr>";
	echo "<td> " .$zeile->nr."</td> ";
	echo "<td>".$zeile->interpret."</td>";
	echo "<td>".$zeile->titel." </td>";
	echo " <td>".$zeile->preis."</td></tr> ";
		
	//echo $zeile->nr."  ".$zeile->interpret ." ".$zeile->titel ." ".$zeile->preis ."<br>";	
	}
	echo "</table>";
	
	
