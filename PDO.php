<?php
$pdo = new PDO(
    'mysql:dbname=enset',
     'root',
     ''
);
$username=$_POST
$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);



$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
/*
echo '<pre>';
$users[0]['email'];

print_r($users);
die();
*/




     ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <title>Document</title>
    </head>
    <body>
    <h2>USERS LISTS</h2>
    <form action="add.php">
    <input type="email" name="email" placeholder="entrer email">
    <button>ajouter</button>
    <hr>
    <table border=1 cellpaddin="4" cellspacing="4" width="80%">
    <thead>
    <tr>
    <th>USER ID</th>
    <th>EMail</th>

    </tr>
    </thead>
    <tbody>
    <?php
     foreach ($users as $user) : ?>
    <tr>
    <?php if($user) : ?>
    <td><?= $user['user_id']?></td>
    <td><?= $user['email']?></td>
    <th><a href="supprimer.php?iddd=<?= $user['user_id']?>">X</a></th>
    <th><a href="modifier.php?iddd=<?= $user['user_id']?>">M</a></th>

    <?php endif ?>
    </tr>
         <?php endforeach ?> 
     
    </tbody>
    <table>



    </body>
    </html>