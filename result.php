<?php 
				
				
				if (isset($_POST['submit'])) {
					$link = $_POST['search'] ;
					$output = shell_exec("python3 /home/sachin/Documents/main.py " . $link . " 2>&1");
					echo $output;
				}				
				?> 
