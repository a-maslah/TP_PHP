<?php

class amine{

const NAME="USER";
public function test(){
    echo self::NAME;
}
}
$a = new amine();
$a->test();

?>