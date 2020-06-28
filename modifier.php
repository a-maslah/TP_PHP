<?php
$id = $_GET['iddd'];
$email =$_GET['email'];
$pdo = new PDO(
    'mysql:dbname=enset',
     'root',
     ''
);
$sql = "UPDATE users SET email=$email WHERE user_id=$id";
die($sql);

$pdo->exec($sql);
header("location:PDO.php");
?>