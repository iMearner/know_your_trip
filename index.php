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
// 				<?php 
// 				$orgString = file_get_contents('http://paramtechnosys.com');
// 				$myString = substr($orgString, strpos($orgString, '<p'),strpos($orgString, '</p>'));
			 

//                 $start = strpos($myString, '<');
//                 $end = strpos($myString, '>');


//                 $loop1 = true;
//                 $offst = 0;
// 				$x = 0;
// 				while ($loop1) 
// 				{
					
// 					$myString = " ". $myString ;

// 					$start = strpos($myString, '<');
//                     $end = strpos($myString, '>');
					
// 					if($end > $start)
// 					{
// 						$newSubString = substr( $myString, $start,$end) ;
// 						$myString = str_replace($newSubString, " ",$myString);
// 					}
// 					else
// 					{
// 						// replaces '>' character with whitespace  
// 						$temp = strpos($myString, '>') ;
// 						$myString = substr_replace($myString," ",$temp ,1);

// 						// to update values of start and end
// 						$start = strpos($myString, '<');
//                     	$end = strpos($myString, '>');
// 					}
					
					

// 					if($start < $end)
// 					{

// 					  $loop1 = true;
// 					}
// 					else
// 					{
// 						$loop1 = false ;
// 					}

// 					$x = +1 ;
					
// 				}
// 				// printing result 
// 				 echo $myString ;
				
				$output = shell_exec("python3 path/to/your/file.py 2>&1"); // 2>&1 is to display errors 
				echo $output
				?> 
			</textarea>
		</div>
	</div>
	<div class="subSect"></div>
	<div class="sect secondSect"></div>
</body>
</html>
