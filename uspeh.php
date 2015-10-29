<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
//$username = $_GET['name'];
//$password = $_POST['password'];
//include 'ucp.php';
//session_start();

include 'config.php';
$_SESSION['logiran'] = 1;
$rezulat = mysql_query($sql,$akaunti);
$rez = mysql_query($sql, $akaunti);
$dir = "SKINS";
$file = $_SESSION['model'];




if($_SESSION["tocno"] == true){

}
//echo $ime;
?>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css"> 
<head>
<title>DarkSide UCP</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body background="gta.jpg">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fixed">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Dark Side</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Дома</a></li>
        <li><a href="/forum">Форум</a></li>
        <li><a href="kontakt.html">Контакт</a></li>
        <li><a href="doniranje.html">Донирање</a></li>
        <li><a href="galerija.html">Галерија</a></li>  
        <li><a href="/ucp/najredovni">Најредовни</a></li>
        <li><a href="zn.html">За нас</a></li>
        <li class="active"><a href="ucp.html">Профил<span class="sr-only">(current)</span></a></li>
        <li><a href="/livechat">LiveChat</a></li>
      </ul>
      
        <ul class="nav navbar-nav navbar-right">
        <li><a href="https://www.facebook.com/ddarksidee"><img src="like_button.png" width="64px" heigth="16px"></img></a></li>
        <li><a href="https://twitter.com/the_dsgame"><img src="twitter_button.png" width="90px" heigth="16px"></img></a></li>
		<li><a href="logout.php"><img src="logout.png" width="96px" heigth="32px"></img></a></li>
          </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="profpanel">
<div class="panel panel-primary" width="300px" height="50px">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo '<img class="profslika" src="SKINS/', $file,'.jpg', '" alt="', $file, '"/>' . ' Dobredojde ' . $_SESSION['username'];;?></h3>
  </div>
  <div class="panel-body" id="ppanel">
   <?php
   echo '<br><b>Level:</b> ' . $_SESSION['level'];
   echo '<br><b>Donator Rank: </b> ' . $_SESSION['donatorrank'];
   echo '<br><b>Vie imate kes pari: ' . $_SESSION['kes'];
   echo '<br>Vasiot email e <b>' . $_SESSION['email'] . '</b>';

if($_SESSION['admin'] > 0)

echo '<br><b>Vie ste admin:</b> ' . $_SESSION['admin'];
   ?>
  </div>
</div>
</div>
<div class="adminpanel">
<div class="panel panel-primary" width="600px" height="50px">
  <div class="panel-heading">
    <h3 class="panel-title">Листа на админи</h3>
  </div>
  <div class="panel-body" id="ppanel">
  <ul class="list-group">
    <?php 
	$rezulat = mysql_query($sql,$akaunti);
	while($row = mysql_fetch_array($rezulat)){
   
    if ($row['admin'] > 0){
	if($row['admin'] < 5555){
    echo '<li class="list-group-item">' . $row["ime"] . ' <b>Admin Level:</b> ' . $row['admin'] . '<br></li>';
	}
	}
	 }
	?> 

  </ul>
  </div>

</div>
</div>
<div class="svpanel">
<div class="panel panel-primary" width="600px" height="50px">
  <div class="panel-heading">
    <h3 class="panel-title">Листа на супервизори</h3>
  </div>
  <div class="panel-body" id="ppanel">
  <ul class="list-group">
    <?php 
	$rezulat = mysql_query($sql,$akaunti);
	while($row = mysql_fetch_array($rezulat)){
   
    if ($row['gamemaster'] > 0){
	if($row['gamemaster'] < 5555){
    echo '<li class="list-group-item">' . $row["ime"] . ' <b>Supervisor Level:</b> ' . $row['gamemaster'] . '<br>';
	}
	}
	 }
	?> 

  </ul>
  </div>

</div>
</div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>