<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div id="test-data">
    </div>
    </div>

    <div id="kastl2">
    <label for="eingabe1">Eingabe1</label>
    <input type="text" id="eingabe1"> <br>
    <label for="eingabe2">Eingabe2</label>
    <input type="text" id="eingabe2"> <br>
    </div>

    <button id="wert">Wert</button>
    <button id="kopieren">Kopieren</button>
    <button id="test1">Test1</button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $("#wert").click(function() {
            var ausgabe;
            ausgabe = $("#eingabe1").val();
            alert(ausgabe);
        });

        $("#kopieren").click(function() {
            var ausgabe;
            ausgabe = $("#eingabe1").val();
            $("#eingabe2").val(ausgabe);
        });

        $( "#test1" ).click(function() {
       
       var id="ccc";
      
         $.ajax({
           url: 'ajax_get_data.php',
           method:"POST",
           data:{id:id},
           success: function(data){
              
               $("#test-data").html(data);
           }
       })
   });

    </script>

</body>
</html>