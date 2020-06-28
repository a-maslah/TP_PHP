<?php

class personne{

    private $cni;
    private $age;
    private $nom;

    public function __construct($cni,$age,$nom){
        $this->cni=$cni;
        $this->age=$age;
        $this->nom=$nom;

    }
    public function __destruct(){
        echo sprintf("Personne avec le CNI: %s est détruit.
       ",
        $this->cni);
      }
      public function __toString(){
        return sprintf("CNI: %s, Nom: %s, Age: %s,
       ",
        $this->cni,
        $this->nom,
        $this->age);
      }
      public function __clone(){
        echo 'Copie un Objet <br>';
      }

}

$p1 = new personne("R1245",21,"amine");
echo $p1;
echo "<br>";
$p2 = new personne("w45782",25,"ahmed");
echo $p2;
echo "<br>";
$p2=clone $p1;

?>