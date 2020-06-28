<?php
$id = $_GET['iddd'];

$pdo = new PDO(
    'mysql:dbname=enset',
     'root',
     ''
);
$sql = "DELETE FROM users WHERE user_id = $id";
$pdo->exec($sql);
header("location:PDO.php");
?>