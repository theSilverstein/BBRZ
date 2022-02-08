<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> PHP</title>

</head>
<body>

	<?PHP
	include "header.php";
	 $zahl = 5;
	switch($zahl)
	{
		case 1: 
        echo "Sehr Gut";
		break;

		case 2: 
        echo "Gut";
		break;
		
		case 3: 
        echo "Befriedigend";
		break;
		
		case 4: 
        echo "Genügend";
		break;
		
		case 5: 
        echo "Nicht Genügend";
		break; 
		
	default: 
       echo "Konnte nicht ausgewertet werden";   
	}
	echo "<br>";
	
	$temperatur = 1;
	if($temperatur > 0)
	{
     echo "Es ist wärmer als 0 grad.";
	}
	elseif($temperatur <= 0)
	{
     echo "Es hat unter 0 grad, bitte das Fenster schlissen.";
	}
	else
	{
    echo "Die Temperatur konnte nicht ausgewertet werden.";
	}
	
	
	
		echo "<h2>";
		echo "Meine erste PHP Zeile";
		echo "</h2>";
		$name = "Teresa Mahringer";
		echo "<br>";
		echo "Mein Name ist $name ";
		$zahl = 1;
		$Schalter = TRUE;
		echo "<br>";
		echo  $zahl. $Schalter;
		echo "<br>";
		$meinname = "Teresa";
		$meinname .= " Mahringer";
		echo "$meinname <br>";
		echo " Ich lerne 'PHP' <br>";
		echo "<font color=\"red\"> Hallo Welt </font>";
		
		
		
	?>
</body>
</html>
