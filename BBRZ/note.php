<?PHP
	$host= "localhost";
	$user = "root";
	$pw = "";
	$db = "note";
	
	$nr = $_POST['nr'];
	$unterrichtsfach = $_POST['unterrichtsfach'];
	$note = $_POST['note'];
	$action = $_POST['action'];
	print_r ($_POST);
	echo "<hr>";
	
	$conn = new mysqli($host, $user, $pw, $db);
	if($conn) echo "Verbindung OK <br>";
	else echo "Verbindung nicht OK <br>";
	
	//Einfügen
	if($action == "Einfuegen"){
		$sql = "INSERT INTO note VALUE($nr, '" .$unterrichtsfach. "', '" .$note. "')";
		$ergebnis = $conn->query($sql);
		if ($ergebnis) echo "Einfügen OK <br>";
		else echo "Einfügen nicht OK <br>";
	}
	
	
	//Ändern
	if($action == "Aendern"){
		$sql = "UPDATE note SET unterrichtsfach='" .$unterrichtsfach. "' , note='" .$note. "'  WHERE nr= $nr";
		$ergebnis = $conn->query($sql);
		if ($ergebnis) echo "Ändern OK <br>";
		else echo "Ändern nicht OK <br>";
	}
	
		//Löschen
	if($action == "Loeschen"){
		$sql = "DELETE FROM note WHERE nr= $nr";
		$ergebnis = $conn->query($sql);
		if ($ergebnis) echo "Löschen OK <br>";
		else echo "Löschen nicht OK <br>";
	}
	
	
	//Anzeige
	$sql = "SELECT * FROM note";	
	$ergebnis = $conn->query($sql);
	if ($ergebnis) echo "Abfrage OK <br>";
	else echo "Abfrage nicht OK <br>";
	
	echo "<table border=2px solid black>";
	while ($zeile = $ergebnis->fetch_object()){
	echo "<tr>";
	echo "<td> " .$zeile->nr."</td> ";
	echo "<td>".$zeile->unterrichtsfach."</td>";
	echo "<td>".$zeile->note." </td> </tr>";

	//echo $zeile->nr."  ".$zeile->interpret ." ".$zeile->titel ." ".$zeile->preis ."<br>";	
	}
	echo "</table>";
	
	

