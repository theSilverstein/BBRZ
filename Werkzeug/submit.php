<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Werkzeugverleih');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Verbindung zur Datenbank aufbauen
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $anrede=$_POST['anrede'];
    $title=$_POST['titel'];
    $vorname=$_POST['vorname'];
    $nachname=$_POST['nachname'];
    $geschlecht=$_POST['geschlecht'];
    $strasse=$_POST['strasse'];
    $plz=$_POST['plz'];
    $ort=$_POST['ort'];
}

if(empty($anrede)){
    $anrede = "Null";
}
if(empty($title)){
    $title = "Null";
}
if(empty($geschlecht)){
    $geschlecht = "Null";
}
//INSERT QUERY
if(mysqli_query($conn,"INSERT INTO Kunde (anrede, titel, vorname, nachname, geschlecht, strasse, plz, Ort)
VALUES ('$anrede', '$title', '$vorname','$nachname','$geschlecht', '$strasse', '$plz', '$ort')")){
echo "Record inserted successfully";
}
?>