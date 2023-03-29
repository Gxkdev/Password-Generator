<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=projet4","root","");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>