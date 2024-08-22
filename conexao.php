<?php
$servername = "localhost";
$username = "root";
$dbname = "meubanco";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Error: " . $e->getMessage();
    die();
}
   try{
    $stmt = $conn->prepare("SELECT count(*) FROM user");
    $stmt->execute();
   }
   catch (PDOException $e){
    $stmt = $conn->prepare("CREATE TABLE user (id int not null AUTO_INCREMENT, email varchar(255) unique, password char(64), primary key(id))");
    $stmt->execute();
   }
?>