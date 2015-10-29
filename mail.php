<?php
session_start();
$pronajden = false;

//$message = "Drag prijatele ovde e DarkSide podrskata\nVi blagodarime na trpenieto\nVasata Lozinka e $password\nSo pocit DarkSide Team\nNasata web strana e www.tha-darkside.com/";
$email = $_POST['email'] ;
//$password = $_POST['password'];
include 'config.php';
$rezulat = mysql_query($sql,$akaunti);
$rez = mysql_query($sql,$akaunti);

while($row = mysql_fetch_array($rezulat)){

$_POST['email'] = $row['email'];
if($email == $row['email'] ){
$pronajden = true;
$message = "Drag DarkSide prijatele blagodarime sto igrate na nasiot server\r\nPozdrav DS Development Team";
mail($email, 'DS Lozinka', $message . "Vasata Lozinka e " . $row['lozinka']);

}
}
if($pronajden == true){
echo "Proverete go vasiot email";
}
else if($pronajden == false){
echo "Vasiot email ne bese pronajden vo nasite databazi";
}
/*while($row = mysql_fetch_array($rez)){
if($email != $row['email'] ){
echo "Vasiot email ne bese pronajden vo nasite databazi";

}
}*/

//$_SESSION['password'] = $password;
//$email = 'dras_grom4e@live.com';

//mail($email,"DarkSide Gaming",$message,"From: darkside@tha-darkside.com");



 
?>