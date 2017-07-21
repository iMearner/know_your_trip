<html>
<head><title>[ K Y T ]</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
	<nav style="margin-bottom:10px;">
		<div class="row">
			<div class="col-sm-3" style="font-size:30px;padding-left:50px;">
				[ K Y T ]
			</div>
		<div class="col-sm-3" style="float:left;">
			<form class="row" action="result.php" method="POST" style="padding-left:50px; padding-top:10px;">
	 			<input class="col-md-9 form-control" type="text" name="search" style="width:200px;"  placeholder="search ... ">
	 			<button class="col-md-3" type="submit" name="submit" style="color:black;
	 			background:transparent;
	 			border:none;
	 			height:35px;">
	      			<span class="glyphicon glyphicon-search"></span> 
	    		</button>
			</form>
		</div>
		<div class="col-sm-3"></div>
		<div class="col-sm-3" style="">
			<a class="btn" href="index.php">Home</a>
			<a class="btn" href="contact.html">Contact</a>
		</div>
		</div>
	</nav>
	</div>
	<div class="row container-fluid" style="margin-top:100px;"> 
		<div class="col-sm-3"></div>
		<div class="col-sm-6"style="font-family: Pacifico;z-index:-20">
			<?php 
				if (isset($_POST['submit'])) {
					
					$link = $_POST['search'] ;
					
					$output = shell_exec("python3 /home/sachin/Documents/main.py " . $link . " 2>&1");
					echo $output;
					
					?>
		</div>
				
		<div class="col-sm-3" style="z-index:-20">
				<?php
					$images = shell_exec("python3 /var/www/html/test.py " . $link . " 2>&1");
					echo $images;
				}				
			?>
		</div>
	</div> 
	
	
</body>

</html>
