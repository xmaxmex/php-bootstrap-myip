<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IP de chegada</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


  </head>

  <body>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">IP de Chegada 1.0.0</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container">



      <div class="starter-template">
       <br><br> <h1>Seu IP de chegada no firewall</h1>
<!--
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>

-->
      </div>


<?php

//phpinfo();

$xip=$_SERVER['REMOTE_ADDR'];

$xagent = $_SERVER['HTTP_USER_AGENT']; 

$xhost=$_SERVER['REMOTE_HOST'];

echo "<b>IP: </b><h2> <span class='label label-success'>".$xip."</span></h2>";



echo "<br>";


echo "<b>Navegador: </b><h3>".$xagent."</h3>";
echo "<br>";

echo "<br>";


echo "<b>Host: </b><h3>".$xhost."</h3>";
echo "<br>";

echo "<br>";

echo "<label>Aagora faça o que quiser com o IP: <span class='label label-primary'>New</span>".$xip."</span></label>";

?>


</div>

</body>
</html>

