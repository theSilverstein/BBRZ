<?php
require_once 'functions.php';
require_once 'config.php';

$conn = connectToDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $vorname=$_POST['vorname'];
        $nachname=$_POST['nachname'];
        $email=$_POST['email'];
        $telefon=$_POST['telefon'];
        $geb=$_POST['geb'];
}

//INSERT QUERY
    if(mysqli_query($conn,"INSERT INTO person (vorname, nachname, mailadresse, telefon, geburtstag )
        VALUES ('$vorname','$nachname','$email','$telefon', '$geb')")){
        echo "Record inserted successfully";
    }
?>  
