<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-mail senden</title>
</head>

<body>
<center>
<?php
$ad = $_POST["name"];
$email = $_POST["email"]; 
 $konu = $_POST["subjekt"]; 
$mesaj= $_POST["message"]; 
  if ($konu =="diger")
 $konu1=$konusirasi;
 else
 $konu1=$konu;
 
 
$kime = "annikaschwind@aol.com";
$konu = "Für Liebl und Schwind Praxisgemeinschaft";
$headers = "From: $ad<$email>";
$mesaj = "
Name: $ad
E-Mail: $email
Betreff: $konu
Nachricht: $mesaj
";

if ( mail($kime , $konu , $mesaj , $headers) )
echo "Danke für Ihre Nachricht";
else echo "E-mail nicht senden!";
 


?>

</center>
</body>
</html>
