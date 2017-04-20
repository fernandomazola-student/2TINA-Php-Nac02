<?php include "function.php" ?>
<?php include "db.php" ?>

<?php

if(isset($_GET['delete'])){
          delCad();
}
select_sp();

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   </head>
   <body>
     <br><br>
     <a style="margin:0 0 0 20px;" href="index.php" class="btn btn-info">Voltar</a><br><br>
   </body>
 </html>
