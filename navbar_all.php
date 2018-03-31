<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <?php
  include("footer_css.php")
  ?>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TenderFoot</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#"></a></li> -->
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Content <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="add_on.php">Add on course</a></li>
          <li><a href="#">Analysis</a></li>
          <li><a href="carrer.php">Career counselling</a></li>
          <li><a href="index.php">Competition</a></li>
          <li><a href="camp.php">Camp</a></li>
          <li><a href="feed.php">Feedback</a></li>
        </ul>
      </li>
      <li><a href="#">About</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
      
      <ul class="dropdown-menu">
       <li><a href="dash.php"> Dashboard</a></li>   
      <li><a href="login_t.php"><!-- <span class="glyphicon glyphicon-log-in"></span> --> Logout </a></li>
      </ul>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
      <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
    </ul>
  </div>
</nav>
