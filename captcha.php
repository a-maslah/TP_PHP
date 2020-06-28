<?php

session_start();
	$code=rand(1000,9999);
	$_SESSION["code"]=$code;
	$image = imagecreatetruecolor(50, 24);
	$background = imagecolorallocate($image, 245, 73, 73); //background color 
	$forground = imagecolorallocate($image, 255, 255, 255);//text color 
	imagefill($image, 0, 0, $background);
	imagestring($image, 5, 5, 5,  $code, $forground);
	header("Cache-Control: no-cache, must-revalidate");
	header('Content-type: image/png');
	imagepng($image);
    imagedestroy($image);
?>
<?php
    session_start();
	if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
	{
		$status = "<p style='color:#FFFFFF; font-size:20px'>
		<span style='background-color:#46ab4a;'>Votre code captcha est correct.</span></p>"; 
	}else{
		$status = "<p style='color:#FFFFFF; font-size:20px'>
		<span style='background-color:#FF0000;'>Le code captcha entré ne correspond pas! Veuillez réessayer.</span></p>";
	}
	echo $status;
?>
    <html>
	<head>
		<title>Formulaire avec captcha en PHP</title>
	</head>
	<body>
	<h3>Lire l'article sur : <a href="https://waytolearnx.com/2019/07/formulaire-avec-captcha-en-php.html" target="_blank">Formulaire avec captcha en PHP</a></h3>
		<form action="validate.php" method="post">
		<table>
		<tr>
			<td>
				<label>Entrer le texte dans l'image</label>
				<input name="captcha" type="text">
				<img src="captcha.php" style="vertical-align: middle;"/>
			</td>
		</tr>
		<tr>
			<td><input name="submit" type="submit" value="Submit"></td>
		</tr>
		</table>
		</form>
	</body>
</html>