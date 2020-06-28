<?php

//preg_match
//fonctio qui rechercher le motif dans une chaine de caractere et retuourner true 
//si trouve et false sinon

$str ="hello world";
if(preg_match("/^[m-o]/",$str)){
    echo "true";

}else{
    echo "Faux";
}

//preg_split
//fonction qui rechercher le motif dans une chaine de caractere et retuourner un tableau

 $tel = "06.15.78.99.12";  
  $digit = preg_split ("/\./", $tel);  
    
  echo "$digit[0] \n"; 
  echo "$digit[1] \n"; 
  echo "$digit[2] \n"; 
  echo "$digit[3] \n"; 
  echo "$digit[4] \n"; 

//preg_replace 
 //fonction qui rechercher le motif dans une chaine de caractere et la remplacer par la nouvelle chaine
 $original = "Une très belle année 2020!"; 
 $replaceWith = "2021"; 
    
 $output = preg_replace("([0-9]+)", $replaceWith, $original);  
     
 // Afficher le résultat
 echo $output; 
  ?>