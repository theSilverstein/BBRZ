
 <?php  

include_once "config.php";

$query = "SELECT * FROM tbkunde";  


$result = mysqli_query($connect, $query);  

 ?>  

<!DOCTYPE html>  
<html>  
     <head>  
          <title>nn</title>  
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
          <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
     </head>  
     <body>  
     <div class="container">
          <h3>Kundenliste</h3>
          <br/>
          <div class="table-responsiv">
               <table id="employee_data" class="table table-striped table-bordered">
               <thead>  
                               <tr>  
                                    <td>id</td>  
                                    <td>anrede</td>  
                                    <td>titelpre</td>  
                                    <td>titelpost</td>  
                                    <td>vorname</td>  
                                    <td>nachname</td> 
                                    <td>Firma</td>  
                                    <td>Strasse</td>  
                                    <td>PLZ</td>  
                                    <td>Ort</td>  
                                    <td>Telefon</td>  
                                    <td>Telefon2</td>                                    
                                    <td>mail</td>  
                                    <td>KundeSeit</td>
                                    <td>Fax</td>  
                                    <td>Kommentar</td>  
                                   
                               </tr>  
                          </thead>  
                    <?php
                    while($row = mysqli_fetch_array($result)){

                         echo '  
                         <tr>  
                              <td>'.$row["ID"].'</td>  
                              <td>'.$row["anrede"].'</td>  
                              <td>'.$row["titelpre"].'</td>  
                              <td>'.$row["titelpost"].'</td>                                  
                              <td>'.$row["vorname"].'</td>  
                              <td>'.$row["nachname"].'</td> 
                              <td>'.$row["Firma"].'</td>  
                              <td>'.$row["Strasse"].'</td> 
                              <td>'.$row["PLZ"].'</td>  
                              <td>'.$row["Ort"].'</td> 
                              <td>'.$row["Telefon"].'</td>  
                              <td>'.$row["Telefon2"].'</td>
                              <td>'.$row["mail"].'</td>  
                              <td>'.$row["KundeSeit"].'</td>
                              <td>'.$row["FAX"].'</td>  
                              <td>'.$row["Kommentar"].'</td>               

                              </tr>  
                              ';  
                         }  

                    ?>
               </table>
          </div>

     </div>
     </body>  
</html>
<script>
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
     
 });  
 </script>