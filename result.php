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
	<style type="text/css">
		.item{
			margin-right: -15px;
    margin-left: -15px;  
    padding-bottom: 62.5%; 
    background-position: 50% 50%;
    background-repeat: no-repeat;
		}
	</style>
<div id="carousel-example" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example" data-slide-to="1"></li>
		<li data-target="#carousel-example" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner" role="listbox">
		<div class="row">
			<div class="col-sm-4">
				<div class="item active " style="background:url('first.jpg') no-repeat center; background-size:cover;">
					<div class="carousel-caption">
						<h1>first image </h1>
						<p>this is first image of carousel testing. this is the first image of the carousel</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class=" item" style="background:url('second.jpg') no-repeat center; background-size:cover;">
					<div class="carousel-caption">
						<h1>second image </h1>
						<p>this is first image of carousel testing. this is the first image of the carousel</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="item" style="background:url('taj.jpg') no-repeat center; background-size:cover;">
					<div class="carousel-caption"  >
						<h1>third image </h1>
						<p>this is first image of carousel testing. this is the first image of the carousel</p>
					</div>
				</div>
			</div>			
		</div>
		
		
		
	</div>

	<a class="left carousel-control" role="button" data-slide="prev" href="#carousel-example">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">next</span>
	</a>
	<a class="right carousel-control" role="button" data-slide="next" href="#carousel-example">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">next</span>
	</a>
</div>


<?php 
				
				
				if (isset($_POST['submit'])) {
					$link = $_POST['search'] ;
					
// 					this portions is to add display images 
					
					$images = shell_exec("python /var/www/html/test.py " . $link . " 2>&1");
					$keywords = preg_split("/[\s,]+/", $images);


					foreach ($keywords as $key => $value) {
						if (strpos($value, ":")>-1) {
							echo "<img src=" . $value . " >";
						}
						else{
							$link =  rtrim($link, "/");
							var_dump($link);
							$value = ltrim($value);
							var_dump($value)

							
							$string = $link ."/" . $value ;
							echo "<img src=" . $string . ">";
						}
					}


					
					$output = shell_exec("python /home/sachin/Documents/main.py " . $link . " 2>&1");
					echo $output;
				}				
				?> 
	</body>

</html>
