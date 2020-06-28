<?php

trait school{
    public function learn(){
        echo "im learning PHP ";
    
    }
}
trait company {
    public function work() {
      echo "I am working with PHP at WayToLearnX!";
    }
  }
class person {
    use school,company;
}

$p=new person();
$p->learn();
echo "<br>";
$p->work();

//PHP ne supporte que l’héritage simple, c’est à dire, une classe fille ne peut hériter que d’une seul classe mère. 
//Donc, que faire si une classe a besoin d’hériter de plusieurs classes mères ? Les traits résolvent ce problème.

//Les traits sont utilisés pour déclarer les méthodes qui peuvent être utilisées dans plusieurs classes. 
//Les traits peuvent avoir des méthodes et des méthodes abstraites qui peuvent être utilisées dans plusieurs classes,
 //et les méthodes peuvent avoir n’importe quel modificateur d’accès (public, private, or protected).
?>