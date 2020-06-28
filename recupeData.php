
<?php
if(isset($_GET['submit'])){
    $nom = $_GET['nom']; 
     $age = $_GET['age']; 
     $adresse = $_GET['adresse'];
     // afficher le résultat
     echo '<h3>Informations récupérées en utilisant GET</h3>'; 
     echo 'Nom : ' . $nom . ' Age : ' . $age . ' Adresse : ' . $adresse; 
     exit;
}

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
    <h2>Formulaire PHP</h2>
    <form action="" method="get">
    Nom :     <input type="text" name="nom" />
    Age :     <input type="text" name="age" />
    Adresse : <input type="text" name="adresse" />
    <input type="submit" name="submit" /> 
</form>

    
   



    </body>
    </html>