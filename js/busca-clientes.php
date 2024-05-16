<?php
$servername = "localhost"
$username = "";
$password = "meubanco";

try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname",$user, $pass);
    $conn->setAttribute((PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
    $stmt = $conn ->prepare("select") 
}



?>