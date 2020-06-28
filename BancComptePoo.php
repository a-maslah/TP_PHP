<?php

class BankAccount{


    public $number;
  public $solde = 0;

public function __construct($number){
    $this->number = $number;
} 
  public function setSolde($solde){
      if($solde <1000){
      throw new Exception("solde insufissant");
    }
      $this->solde = $solde;
  }
  public function getSolde(){
      return $this->solde;
  }
}
$cp = new BankAccount("4629556554654");
var_dump($cp);
$cp->setSolde(500);

var_dump($cp);
echo $cp->getSolde();

?>