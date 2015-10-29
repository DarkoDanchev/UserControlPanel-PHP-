<?php
$akaunti = mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('ucp',$akaunti);
$sql = "SELECT * FROM players";
?>