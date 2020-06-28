<?php

$reg=preg_match("/^sad/","alex was sad");
echo $reg;
echo "<br>";

$car = array("renau"=>"GOLF","marque"=>"JDJ");
if(array_key_exists("marque",$car)){
    echo "la cle existe";
}else{
    echo "la cle n'existe pas";
}
echo "<br>";

function add($nb){
return $nb+$nb;
}
// array_map fpnction qui renvoie chaque valeur d’un tableau à une fonction défini par l’utilisateur 
//et renvoie un tableau avec les nouvelles valeurs, fournis par la fonction défini par l’utilisateur
$tab = array(1,5,5,8);
print_r(array_map("add",$tab));
echo "<br>";

//Json_encode
//Fonction qui convertit des objets PHP en JSON.
$obj->nom="maslah";
$obj->age=21;
echo Json_encode($obj);
echo "<br>";

//date fonction est une fonction intégrée 
//en PHP qui formate une date/heure locale et renvoie la date formatée, sous forme de chaîne de caractères
echo "aujourdhui est :".date("Y/m/d");
echo "<br>";
//trim fonction qui supprimer les espace et auutres caracteres
$str = "   Enset GLSID    ";
$res = trim($str);
echo $res;
echo "<br>";

//Json_decode 
//fonction qui decoder une chaine JSON<?php
    $json = '{"a":1,"b":2,"c":3}';
    var_dump(json_decode($json));
    echo "<br>";
//md5 
//calcule le hachage d'une chaine
$str = "AMINemaslah";
echo md5($str);
echo "<br>";
//array_slice 
//fonction qui renvoie la partie selectionne d'un tableau(array) deux parametre (tableau,offset)

$tab =array("orange","black","white","yellow","green");
var_dump(array_slice($tab,2));
echo "<br>";
// array_unique
// fonction qui permet de supprimer les doublants dans un tableau
     $colors = array("1"=>"blue", "2"=>"orange", "3"=>"blue");
     print_r(array_unique($colors));
echo "<br>";

//strrpos
//fonction qui Trouve la position du dernière occurrence d’une chaîne dans une autre chaîne.
    echo strrpos("I love tomatos, I love tomatos too!","tomatos");
 echo "la version est :".PHP_VERSION;
 echo "<hr>";
// Htmlspecialchars
//Convertit certains caractères prédéfinis vers des entités HTML.
    $str = "Welcom <b>to</b> WayToLearnX.com";
    echo htmlspecialchars($str);
?>