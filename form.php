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

<form action="<?php $_SERVER['PHP_SELF']?>" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
     

<?php
 $nameErr = $emailErr = $websiteErr = $genderErr = "";
 $name = $email = $gender = $comment = $website = "";
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(empty($_POST["name"])){
      $nameErr =" name is required ";
  }
  else{
      $name=test_input($_POST["name"]);
  }
  if(empty($_POST["email"])){
    $emailErr =" email is required ";
}else{
    $email=test_input($_POST["email"]);
}
if(empty($_POST['website'])){
    $websiteErr ="";
}else{
    $website=test_input($_POST['website']);
}
if(empty($_POST['comment'])){
    $comment ="";
}else{
    $comment=test_input($_POST['comment']);
}
if(empty($_POST['gender'])){
    $genderErr ="Gender is required";
}else{
    $gender=test_input($_POST['gender']);
}
 

}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>



<?php
    echo "welcome :". $_GET['name'];
    echo "your email is :" . $_GET['email'];

?>
    </body>
    </html>