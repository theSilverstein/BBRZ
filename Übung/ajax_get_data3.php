<?php
$ausgabe = "<form>";
$databastable = $_POST["id"];
$teile = explode("-", $databastable);
$database = $teile[0];
$table = $teile[1];
$host = "localhost";
$dbUser = "root";
$password = "";
$dbConn = new mysqli($host,$dbUser,$password,$database);
//tablehead
$queryForTablehead =  "SHOW COLUMNS FROM ".$table;
$resultForTablehead = mysqli_query($dbConn, $queryForTablehead);
while($row = mysqli_fetch_array($resultForTablehead)){
    
    $ausgabe .= '<label for='.$row[0].'>'.$row[0].'</label>';
    $ausgabe .= '<input type="text" name='.$row[0].' id='.$row[0].'><br>';
}




echo $ausgabe.'</form>';