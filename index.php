<html>
<head><title>[ K Y T ]</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
	 
	 <script type="text/javascript">
	 	function changeClass(){
	 		document.getElementById("demo").style.display = "block";
	 	}
	 </script>
</head>
<body>
	<nav>
		<div style="float:right; margin-right:300px;">
			<a class="btn" href="#">Home</a>
			<a class="btn" href="contact.html">Contact</a>
		</div>
	</nav>
	<div class="sect firstSect">
		<label>know<br>your<br>trip</label>
		<label style="margin-top:110px;">
			<form action="#" method="POST">
 				<input type="text" name="search" placeholder="search your destination here ... ">
 				<button type="button" class="btn-new" onclick="changeClass()" >
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
			</form>
		</label>
		<div>
			<textarea id="demo" rows="10" cols="50" style="display:none;">
				<?php 
				$mystring = file_get_contents('http://paramtechnosys.com/');
				// echo strpos($mystring, '<p');
				echo substr($mystring, strpos($mystring, '<p'),strpos($mystring, '</p>'));
				?> 
			</textarea>
		</div>
	</div>
	<div class="subSect"></div>
	<div class="sect secondSect"></div>
</body>
</html>
