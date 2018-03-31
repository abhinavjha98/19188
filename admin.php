<?php include("includes/header.php")
?> 
  
<?php include("includes/nav.php") ?>

<div class="container">


	<div class="jumbotron">
		<h1 class="text-center"><?php
		// session_start();
		if(logged_in()) 
		{		
		echo $_SESSION['username'];
		}
		else
		{
			
			redirect("index.php");
		}
		?></h1>
	</div>


<?php include("includes/footer.php") ?>
