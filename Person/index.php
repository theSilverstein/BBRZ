<?php
require_once 'config.php';
require_once 'functions.php';

$conn = connectToDB();


?> 
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Personen</title>        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <h1>Personen Speichern</h1>
        <form action="submit.php" method="post" class="form-horizontal">
            
              <div class="mb-3">
                <label for="vorname" class="form-label">Vorname</label>
                <input type="text" class="form-control" id="vorname" name="vorname" >
              </div>
            
              <div class="mb-3">
                <label for="nachname" class="form-label">Nachname</label>
                <input type="text" class="form-control" id="nachname" name="nachname">
              </div>
            
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
              </div>
            
              <div class="mb-3">
                <label for="telefon" class="form-label">Telefonnummer</label>
                <input type="text" class="form-control" id="telefon" name="telefon">
              </div>
            
              <div class="mb-3">
                  <label for="geb" class="form-label">Geburtstag</label><br>
                  <input type="date" id="geb" name="geb">
              </div>
            
            
            <button type="submit" class="btn btn-primary" id="speichern" name="speichern">Submit</button>
</form>
    </body>
</html>
