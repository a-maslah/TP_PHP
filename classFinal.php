<?php
/*
class Mathclass{
    final function calc($x,$y){
        $som =$x + $y;
        echo $som;
    }

}

class ecole extends Mathclass{

    function calc($a,$b){
        $m = $a * $b;
        echo $m;
    }
}
*/
final class A {
function show(){
echo "hello wolrld";
}
}

class B extends A {
   /* function show(){
        echo "hello wolrld";
        
        } 
         */
}
$obj =new B;
$obj->show();
?>