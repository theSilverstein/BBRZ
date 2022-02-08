<!doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Wekzeugverleih</title>
  </head>
  <body>
    <h1>Kunde</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <form action="submit.php" method="post" class="form-horizontal">
        
        <div class="mb-3">
            <label for="anrede" class="form-label">Anrede</label>
            <input type="text" class="form-control" id="anrede" name="anrede" >
        </div>

        <div class="mb-3">
            <label for="titel" class="form-label">Titel</label>
            <input type="text" class="form-control" id="titel" name="titel" >
        </div>        

        <div class="mb-3">
            <label for="vorname" class="form-label">Vorname</label>
            <input type="text" class="form-control" id="vorname" name="vorname" required>
        </div>
          
        <div class="mb-3">
            <label for="nachname" class="form-label">Nachname</label>
            <input type="text" class="form-control" id="nachname" name="nachname" required>
        </div>
          
        <div class="mb-3">
            <label for="geschlecht" class="form-label">Geschlecht</label>
            <input type="text" class="form-control" id="geschlecht" name="geschlecht">
        </div>        
          
        <div class="mb-3">
            <label for="strasse" class="form-label">Strasse</label>
            <input type="text" class="form-control" id="strasse" name="strasse" required>
        </div>          
        
        <div class="mb-3">
            <label for="plz" class="form-label">PLZ</label>
            <input type="text" class="form-control" id="plz" name="plz" required>
        </div>        
          
        <div class="mb-3">
            <label for="ort" class="form-label">Ort</label>
            <input type="text" class="form-control" id="ort" name="ort" required>
        </div>

          <button type="submit" class="btn btn-primary" id="speichern" name="speichern">Submit</button>
</form>
    
  </body>
</html>