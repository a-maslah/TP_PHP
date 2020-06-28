<?php

class str{

public static  function upper($str){
    return mb_strtoupper($str);
}
public static function lower($str){
    return mb_strtolower($str);
}

public static function lentgh($str){
    return mb_strlen($str);
}
}

echo str::lentgh("amine");

?>