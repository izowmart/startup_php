<!DOCTYPE html>
<html>
<head>
	<title>conditional statements</title>
</head>
<body>
<!-- conditional statements are used to perform different actions based on different conditions -->
	<?php 
	echo "<h2>if statement</h2> <p>executes some code if one condition is true</p>";
	echo "<pre>
			syntax
					if(condition){
						code to be executed;
					}
		</pre>";
		$a=7;
		$b=4;
		if($a < $b){
			echo "a is greater than b </ br>";
		}
		// only welcome new users
		$new_user = true;
		if($new_user){
			echo "<h1>welcome!</h1>";
			echo "<p>we are glad you signed up</p>";
			// don't divide by zero
			$numerator= 20;
			$denomenator= 0.1;
			if($denomenator>0)
			if($denomenator==0)	
			{
				$result =$numerator / $denomenator;
				echo "result : {$result}";
			}
			 else{
				echo "you cannot divide by zero";
			}
		}
		echo "<br>";
		echo "<br>";
		$currentMonth = date('F',time());
		if($currentMonth=="August"){
			echo "its really hot";
		}else{
			echo"It's:{$currentMonth}" ." " . "atleast its not hot";
		}
		

 	?>
</body>
</html>