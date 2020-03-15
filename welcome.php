<?php
$unm=$_POST["unm"];
$pass=$_POST["pass"];
if (($unm=="divyesh" || $unm=="rutvik") && ($pass=="0007" || $pass=="9006") )
{
  header('Location: https://www.youtube.com/channel/UCMgvAFjbSBZPVDAx2Hda3Dw/');
  exit;  
}
else{
  header('Location: index.php');
  exit;
}
?>
