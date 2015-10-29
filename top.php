<?php
session_start();
$pari = 0;
$pari1 = 0;
$pari2 = 0;
$pari3 = 0;
$pari4 = 0;
$id = 0;
$id1 = 0;
$id2 = 0;
$id3 = 0;
$id4 = 0;
$username = "";
$username1 = "";
$username2 = "";
$username3 = "";
$username4 = "";
//$kes = $_SESSION['kes'];
//$id2 = $_SESSION['id'];
/*$conn = mysql_connect('g-center.net','ds_samp','oOGPfOVWNRf') or die(mysql_error());
$sql = "SELECT * FROM players";*/
include 'config.php';
$rez = mysql_query($sql,$akaunti);

while($row = mysql_fetch_array($rez)){
  if($row['kes']>$pari){
    $pari=$row['kes'];
	$id =$row['id'];
	$username = $row['ime'];
	
  }
}
$rez = mysql_query($sql,$akaunti);
while($row = mysql_fetch_array($rez)){
  if(($row['kes']>$pari1) and ($pari1 != $pari)){
    $pari1=$row['kes'];
	$id1 =$row['id'];
	$username1 = $row['ime'];
  }
}
$rez = mysql_query($sql,$akaunti);
while($row = mysql_fetch_array($rez)){

  if($row['kes']>$pari and $pari2 != $pari1 and $pari2 != $pari){
    $pari2=$row['kes'];
	$id2 =$row['id'];
	$username2 = $row['ime'];
  }
}
$rez = mysql_query($sql,$akaunti);
while($row = mysql_fetch_array($rez)){


  if($row['kes']>$pari and $pari3 != $pari2 and $pari3 != $pari1 and $pari3 != $pari){
    $pari3=$row['kes'];
	$id3 =$row['id'];
	$username3 = $row['ime'];
  }
}
$rez = mysql_query($sql,$akaunti);
while($row = mysql_fetch_array($rez)){


  if($row['kes']>$pari and $pari4 != $pari3 and $pari4 < $pari2 and $pari3 != $pari1 and $pari3 != $pari){
    $pari4=$row['kes'];
	$id4 =$row['id'];
	$username4 = $row['ime'];
  }
}
echo $username . ': ' . $pari . '<br>';
echo $username1 . ': ' . $pari1 . '<br>';
echo $username2 . ': ' . $pari2 . '<br>';
echo $username3 . ': ' . $pari3 . '<br>';
echo $username4 . ': ' . $pari4 . '<br>';
?>