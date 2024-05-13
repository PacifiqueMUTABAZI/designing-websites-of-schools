<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_firstname=htmlspecialchars($_POST["firstname"]);
    $_lastname=htmlspecialchars($_POST["lastname"]);

    echo"Hello! Thank you for you attention!";
    echo"<br>";
    echo $_firstname;
    echo"<br>";
    echo $_lastname;
    header("location:index.php");
}