<?php
$unm=$_POST["unm"];
$pass=$_POST["pass"];
if (($unm=="divyesh" || $unm=="rutvik") && ($pass=="0007" || $pass=="9006") )
{
  header('Location: home.html');
  exit;  
}
else{
  header('Location: login.html');
  exit;
}
?>
