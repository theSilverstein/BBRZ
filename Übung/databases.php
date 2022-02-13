
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
          <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
          <style>
              label{
                  display:inline-block;
                  width: 120px;
              }
          </style>
    </head>
    <body>
    <?php
include_once "config.php";

$query = "show DATABASES";  

$result = mysqli_query($connect, $query);  
echo'<select name="cars" id="cars">';
while($row = mysqli_fetch_array($result)){
    // echo'<option value='.$row["Database"].'>'.$row["Database"].'</option>';
    $queryfortable = "show TABLES FROM ".$row["Database"];
    $resultfortable = mysqli_query($connect, $queryfortable);

    while($rowtable = mysqli_fetch_array($resultfortable)){
        echo'<option value='.$row["Database"].'-' .$rowtable[0].'>'.$row["Database"].'-' .$rowtable[0].'</option>';
    }
}
echo'</select>';
?>
    <div class="container">
    <div id="test-data">
    </div>
    </div>
    <button id="test1">Test1</button>
    <div class="container">
    <div id="test-data2">
    </div>
    </div>
    <button id="test2">Test2</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$( "#test1" ).click(function() {
    var id=$("#cars").val();
          $.ajax({
            url: "ajax_get_data2.php",
            method:"POST",
            data:{id:id},
            success: function(data){
            $("#test-data").html(data);
            }
        })
    });
    $( "#test2" ).click(function() {
    var id=$("#cars").val();
          $.ajax({
            url: "ajax_get_data3.php",
            method:"POST",
            data:{id:id},
            success: function(data){
            $("#test-data2").html(data);
            }
        })
    });
    </script>
    </body>
    </html>


