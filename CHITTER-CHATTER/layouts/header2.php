<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>CHITTER CHATTER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body{
        background-image:url('images/anu.jpg');
        background-repeat: repeat-y;
        width:100%;
    }
    .navbar-inverse {
        background-color: #3b173da8;
        border-color: #3b173da8; 
    }
    .navbar-inverse .navbar-brand {
        color: white;
    }
    a:hover{
        color: #50546d;
    }
    .navbar-inverse .navbar-nav>li>a {
        color: white;
    }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">CHITTER CHATTER</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  