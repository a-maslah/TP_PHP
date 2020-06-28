<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <title>Document</title>
    </head>
    <body>
    Welcome <?php echo $_GET["name"]; ?><br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<a href="<?php echo $_SERVER['PHP_SELF'];?>?subject=PHP&web=W3schools.com">Test $GET</a>
<?php
   echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>
<?php
//$_REQUEST utilisation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>





     <?php
       /* $x= 1999;
        echo "nombre";
        echo "<br>";
        echo "PHP";
        echo "<hr>";
        $tab = array("amine","GLSID",15);
        var_dump($tab);
        */
      /*  class Car {
    function car(){
        $this->model = "RENAULT";
    }
}
        $c = new Car();
        echo $c->model;


        */
        $chaine = "amine Maslah GLSID ";
        echo str_replace("Maslah","MASLAH21",$chaine);
for($x=0;$x<10;$x++){
    echo "le nombre  : $x <br>";
}       
$tab = array("hshshd","sjjdjdj","lalal");
foreach($tab as $t)
  echo "les elements de tableau : $t <br>";
        
      echo "Hello AMINE MASLAH";
      $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $i=>$key){
    echo " $i=$key <br>";
}
echo $age['Peter'];
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

arsort($age);
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
echo "i like . $tab[0] . and . $tab[1]<br>";
function write($name){
    echo "HELLO $name";
}
write("AMINE");
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x]. "<br>";
}
/*
$people = array("Peter", "Joe", "Glenn", "Cleveland");
print_r(each($people));
*/
print_r($_SERVER['PHP_SELF']);
print_r($_SERVER['REQUEST_METHOD']);


     ?>
    </body>
    </html>