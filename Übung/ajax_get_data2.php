<?php
$ausgabe = "<table>";
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
$spalten = 0;
$ausgabe .= '<tr>'; 
while($row = mysqli_fetch_array($resultForTablehead)){
    
    $ausgabe .= '<th>'.$row[0].'</th>';
    $spalten++;
}
$ausgabe .= '</tr>';

//tablebody
$query = "Select * from ".$table;  
$result = mysqli_query($dbConn, $query);
$rows2 = "";
while($row2 = mysqli_fetch_array($result)){
   $ausgabe .= '<tr>';
    for($x=0; $x < $spalten; $x++){ 
        $ausgabe .= '<td>'.$row2[$x].'</td>';
    }
    $ausgabe .= '</tr>';
}


echo $ausgabe.'</table>';