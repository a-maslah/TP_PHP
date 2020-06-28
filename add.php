<?php
$email = $_GET['email'];

$pdo = new PDO(
    'mysql:dbname=enset',
     'root',
     ''
);
$sql = "INSERT INTO users VALUES ('','$email')";

$pdo->exec($sql);
header("location:PDO.php");
?>