<?php
require_once 'config.php';

    function connectToDB() {
        // Verbindung zur Datenbank aufbauen
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        // Überprüfen, ob die Verbindung zur Datenbank nicht aufgebaut werden konnte
        if (!$conn) {
            // Ausführung beenden und Fehlermeldung ausgeben
            die('Es konnte keine DB-Verbindung hergestellt werden ' . mysqli_connect_error());
        }

        // Überprüfen ob der Zeichensatz für die Verbindung zur DB nicht gesetzt werden konnte
        if (!mysqli_set_charset($conn, 'utf8mb4')) {
            die('Der Zeichensatz für die Verbindung zur DB konnte nicht gesetzt werden.');
        }
        
        return $conn;
    }
    
    function closeDB(&$conn) {
        if ($conn) {
            // Datenbankverbindung schließen
            mysqli_close($conn);
        }
    }
