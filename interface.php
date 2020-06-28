<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
interface myinterface{
    public function method1();
    public function method2();
    public function method3();

}

class myclass implements myinterface{
    public function method1(){
        echo "method 1 Appele " . "\n";
    }
    public  function method2(){ 
        echo "Méthode2 Appelé". "\n"; 
      } 
      
      public  function method3(){ 
        echo "Méthode3 Appelé". "\n"; 
      } 

}

$c = new myclass();
$c->method1();
$c->method2();
$c->method3();

// Une interface permet aux utilisateurs de créer des programmes, 
//en spécifiant les méthodes publiques qu’une classe doit implémenter,
// sans impliquer la complexité et les détails de l’implémentation des méthodes. 
// Une interface est définie comme une classe, mais avec le mot-clé interface.
// L’interface ne contient pas de propriétés ou de variables comme le cas dans une classe.
?>