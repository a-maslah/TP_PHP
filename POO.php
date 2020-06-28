<?php

class Person{
    public $firstName ;
    public $lastName ;
    public $age ;
    private static $total = 0;


   public function __construct($firstName,$lastName,$age){
       $this->firstName = $firstName;
       $this->lastName = $lastName;
       $this->age = $age;
       static::$total++;

}

public static function getTotal(){
    return static::$total;
}
public function FullName(){
    return $this->firstName . " " . $this->lastName;
}
 }

$p = new Person("MASLAH","AMINE",21);
$obj = new Person("omayma","sjsjj",22);
echo $p->firstName;

var_dump($p->firstName);
var_dump($p->lastName);
var_dump($p->age);
echo $p->FullName();
print_r($p->firstName);
//echo Person::$total;
echo Person::getTotal();
echo "<br>";
var_dump($obj->firstName);
//echo $p->age ."" .  $p->firstName . $p->lastName;
echo "<div style='color:red;'>HELLO</div>"
?>
<?php
print("<h1>AMINE MASLAH</h1>");
$var=21;
if(isset($var)){
    echo "true";

}else{
    echo "false";
}

/*
$data[] =
array("var1"=>12.3,12.8,"var2"=>"value",9000,"var3"=>array(true,false));
echo json_encode($data);
*/

class amine{

    const NAME="USER";
    public function test(){
        echo self::NAME;
    }
}
$a = new amine();
$a->test();

?>