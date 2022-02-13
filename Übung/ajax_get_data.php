<?php
// $antwort = '<h1>es funkt</h1>';
// echo $antwort;
$x = $_POST["id"];

$tablehead = '<table><tr><th>Spalte 1</th><th>Spalte 2</th><th>Spalte 3</th><th>Spalte 4</th></tr>';
$tablebody = "";
for($i=0; $i <=4; $i++){ 
    $tablebody .= '<tr><td>Zeile '.$x.'</td>'.'<td>Zeile '.$i.'</td>'.'<td>Zeile '.$i.'</td>'.'<td>Zeile '.$i.'</td></tr>';
}
$tableend = '</table>';
$table = $tablehead.$tablebody.$tableend;
echo $table;
?>