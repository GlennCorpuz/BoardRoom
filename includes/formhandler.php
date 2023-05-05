<?php

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $Firstname = htmlspecialchars($_POST["firstname"]);
    $Lastname = htmlspecialchars($_POST["lastname"]);

    header("Location: ../Index.php");
}
else{
    header("Location: ../Index.php"); 
}