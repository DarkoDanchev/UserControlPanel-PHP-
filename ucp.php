<?php
session_start();
$username = $_POST['username'] ;
$password = $_POST['password'];
$uspeh = false;
$logiran = 0;
include 'ucp.html';
include 'config.php';

$rezulat = mysql_query($sql,$akaunti);

while($row = mysql_fetch_array($rezulat)){

$_POST['username'] = $row['ime'];
$_POST['password'] = $row['lozinka'];
$_POST['level'] = $row['level'];
$_POST['email'] = $row['email'];
$_POST['kes'] = $row['kes'];
$_POST['id'] = $row['id'];
$_POST['donatorrank'] = $row['donatorrank'];
$_POST['model'] = $row['model'];
$_POST['admin'] = $row['admin'];
$_POST['gamemaster'] = $row['gamemaster'];

if($username == $row['ime'] and $password == $row['lozinka']){
$uspeh = true;
$logiran = 1;
//$user = $row['ime'];
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['level'] = $_POST['level'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['model'] = $_POST['model'];
$_SESSION['kes'] = $_POST['kes'];
$_SESSION['id'] = $_POST['id'];
$_SESSION['donatorrank'] = $_POST['donatorrank'];
$_SESSION['admin'] = $_POST['admin'];
$_SESSION['gamemaster'] = $_POST['gamemaster'];

}
}
if($uspeh == true){

$logiran = 1;
$_SESSION['logiran'] = 1;
//$logiran = $_SESSION['logiran'];

}
if($logiran == 1){
//$_SESSION['username'] = $_POST['username'];

$lokacija = "Location: uspeh.php";
header($lokacija);
error_reporting(E_ERROR | E_PARSE);

}
?>

