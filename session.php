<?php
/*if(!isset($_COOKIE['Visites']))
$n=1;
else
$n = $_COOKIE['Visites'] + 1;
setcookie("Visites",$n,time()+24*60*60);
*/
?>
<?php
  session_start();
?>
<hr>

<pre>
<?php
print_r($_COOKIE);
print_r($_SESSION);

?>
</pre>