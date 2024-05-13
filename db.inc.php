<?php
$dbn="mysql:hostname=localhost;databasename=pacifique";
$username="root";
$password="";
try {

$pdo= new PDO($dbn,$username,$password);
$pdo->setATTRIBUTE(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo"connection faile".$e->getMessage();
   
}


?>