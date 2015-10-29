<?php
session_start();
$skin = $_POST['skin'];
$ime = $_SESSION['username'];
$akaunti = mysql_connect('g-center.net','ds_samp','oOGPfOVWNRf');
mysql_select_db('players',$akaunti);
$sql = 'UPDATE players
        SET model="$skin"
        WHERE ime="$ime"';

mysql_query($sql,$akaunti);
echo 'Uspesno go postavivte vasiot skin so ' . $skin . ' ID'; 


?>