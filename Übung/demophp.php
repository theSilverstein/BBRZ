<?php
$monate = array("Januar", "Februar", "März", "April");

$formular = array("feld1", "feld2","feld3");
echo "<form>";
for($i=0; $i < count($formular); $i++){ 
    echo'<label for='.$formular[$i].'>'.$formular[$i].'</label>';
    echo'<input type="text" name='.$formular[$i].' id='.$formular[$i].'><br>';
}
echo '</form>';

?>