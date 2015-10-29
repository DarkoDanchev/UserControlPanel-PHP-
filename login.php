<?php
session_start();
if($_SESSION['logiran']== 1){
//$_SESSION['username'] = $_POST['username'];

$lokacija = "Location: uspeh.php";
header($lokacija);
error_reporting(E_ERROR | E_PARSE);

}
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
          </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="logform">
<form action="ucp.php" method="POST">
  <script src="js/bootstrap.js"></script>
  <div class ="prv"><b><br></b><input type="text" name="username" class="form-control" placeholder="InGame ime od serverot" aria-describedby="basic-addon1"></div>
  <div class="vtor"><b><br></b><input type="password" name ="password" class="form-control" placeholder="Lozinka" aria-describedby="basic-addon1"></div>
  <button type="submit" value="Login" class="btn btn-default" aria-label="Left Align">
    <span  aria-hidden="true">Логин</span>
  </button>
</form>

<div><a href="mail.html" class="zaboravena">Ja zaboravivte lozinkata?</a></div>
</div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>