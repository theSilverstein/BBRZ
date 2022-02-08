<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Werkzeugverleih');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Verbindung zur Datenbank aufbauen
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


// SQL Statement
$query = "Select k.kundeID, k.vorname, k.nachname, wz.bezeichung, vd.verleihBegin, vd.verleihEnde, vd.verleihMarkt, vd.rueckgabeMarkt from verleih as v
inner join kunde as k on v.Kunde_kundeID = k.kundeID
inner join verleihdeteil as vd on vd.Verleih_verleihID = v.verleihID
inner join werkzeug as wz on vd.Werkzeug_werkzeugID = wz.werkzeugID";

// Prepared Statement erstellen
$stmt = $conn->prepare($query);

// Statement ausführen
$stmt->execute();

// Ergebnis des Statements in resultat speichern
$result = $stmt->get_result();

$verleih = [];

// Anzahl der Reihen im Resultat überprüfen
if ($result && $result->num_rows > 0) {
    // Durchlaufen aller Datensätze und auslesen eines Datensatzes als assoziativen Arrays
    while ($row = $result->fetch_object()) {
        $verleih[] = $row;
    }
}


?>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Tabelle</title>        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <h1>Tabelle</h1>
        
        <label class="checkbox-inline">
           <input type="checkbox" id="inlineCheckbox1" value="Alle" name="sort">Alle
        </label>
        <label class="checkbox-inline">
           <input type="checkbox" id="inlineCheckbox2" value="Letztes Monat" name="sort">Letztes Monat
        </label>
        <button type="submit" class="btn btn-primary" id="suchen" name="sortieren">Sortieren</button>
     

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Kunden ID</th>
      <th scope="col">Vornamen</th>
      <th scope="col">Nachnamen</th>
      <th scope="col">Werkzeug</th>
      <th scope="col">Von</th>
      <th scope="col">Bis</th>
      <th scope="col">Verleih Markt</th>
      <th scope="col">Rückgabe Markt</th>
    </tr>
  </thead>
  <tbody>
    <?php  foreach ($verleih as $ver): ?>
      <tr>
          <td><?= $ver->kundeID ?></td>
          <td><?= $ver->vorname ?></td>
          <td><?= $ver->nachname ?></td>
          <td><?= $ver->bezeichung ?></td>
          <td><?= $ver->verleihBegin ?></td>
          <td><?= $ver->verleihEnde ?></td>
          <td><?= $ver->verleihMarkt ?></td>
          <td><?= $ver->rueckgabeMarkt ?></td>
      </tr>
         <?php endforeach; ?>
  </tbody>
</table>
 </body>
</html>