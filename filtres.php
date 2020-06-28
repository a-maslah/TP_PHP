<?php
//utilisation de la fonction FILTER_VAR(variable, filter, options)
 $str = "<p>Welcome <b>to</b> WayToLearnX.com</p>";
   
 // nettoyer la chaîne
 $newStr = filter_var($str, FILTER_SANITIZE_STRING);
 echo $newStr;
echo "<br>";

$ip = "192.168.1.&";

if(filter_var($ip,FILTER_VALIDATE_IP)){
    echo " adresse ip valide";
}else {
    echo " adresse ip n'est pas valide";

}
$email = "amine!gmail.com";
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
echo " adresse email valide";
}else {
    echo " adresse email n'est pas valide";

}
//serialiser une insatnce utilisier la fonction serialize()
class A{
    public $n=1;
    public function getN(){
        return $this->n;
    }
}

$a = new A;
$res = serialize($a);
echo $res;
echo "<br>";

 
  class MyClass { }
   
  interface MyInterface {}
   
  trait MyTrait {
    public function display() {
      return "Welcome to WayToLearnX.com";
    }
  }
   
  $classX = new class extends MyClass implements MyInterface {
    use MyTrait;
  };
   
  echo $classX->display();
echo "<br>";
echo serialize($classX);

?>