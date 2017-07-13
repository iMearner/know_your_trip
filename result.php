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


					
					$output = shell_exec("python3 /home/sachin/Documents/main.py " . $link . " 2>&1");
					echo $output;
				}				
				?> 
