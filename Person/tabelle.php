<?php
require_once 'functions.php';
require_once 'config.php';

$conn = connectToDB();
// SQL Statement
$query = "SELECT * FROM person";

// Prepared Statement erstellen
$stmt = $conn->prepare($query);

// Statement ausführen
$stmt->execute();

// Ergebnis des Statements in resultat speichern
$result = $stmt->get_result();

$personen = [];

// Anzahl der Reihen im Resultat überprüfen
if ($result && $result->num_rows > 0) {
    // Durchlaufen aller Datensätze und auslesen eines Datensatzes als assoziativen Arrays
    while ($row = $result->fetch_object()) {
        $personen[] = $row;
    }
}


// Version DB Verbindung beenden
closeDB($conn);

?> 
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Person Tabelle</title>        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <h1>Personen Tabelle</h1>
        
        <form  class="form-horizontal">
        <label class="checkbox-inline">
           <input type="checkbox" id="inlineCheckbox1" value="Vorname"> Vorname
        </label>
        <label class="checkbox-inline">
           <input type="checkbox" id="inlineCheckbox2" value="Nachname"> Nachname
        </label>
        <button type="submit" class="btn btn-primary" id="suchen" name="suchen">Suchen</button>
        <input type="search" class="form-control" placeholder="Such Text">
        </form>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vornamen</th>
      <th scope="col">Nachnamen</th>
      <th scope="col">Email</th>
      <th scope="col">Telfonnummer</th>
      <th scope="col">Geburtsdatum</th>
    </tr>
  </thead>
  <tbody>
    <?php  foreach ($personen as $personen): ?>
      <tr>
          <td><?= $personen->personID ?></td>
          <td><?= $personen->vorname ?></td>
          <td><?= $personen->nachname ?></td>
          <td><?= $personen->mailadresse ?></td>
          <td><?= $personen->telefon ?></td>
          <td><?= $personen->geburtstag ?></td>
      </tr>
         <?php endforeach; ?>
  </tbody>
</table>
 </body>
</html>



