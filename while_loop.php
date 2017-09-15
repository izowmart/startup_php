<!DOCTYPE html>
<html>
<head>
	<title>While Loops</title>
</head>
<body>
	<?php 
	// a while loops through a block of code as long as the specified condition is true
	/*
		while (condition){
	#block of code to be run
		}
	*/
		$count=0;
		while($count<=10){
				// echo"<h2>PHP is Awesome!</h2>";
			if($count % 2==0){
				echo $count ."is an even number <br />";
			}else{
				echo $count ."is an odd number <br />";
			}
			$count++;
		}
	echo "using a while loop write a script that will print the following to the browser:<br> 
	abc abc abc abc abc abc abc abc abc abc abc
	xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz xyz

	using a while loop, print numbers from 0-100 and if a number is a multiple of three,instead of the number.print multiple of three,and if the number is a multiple of 5,print multiple of 5,and if a number is both a ultiple of 3 and 5,print MARCO-pollo,else print the number"
	;
	echo "<br />";
	echo "<br />";
	echo "<br />";

	$counter=0;

	while ($counter<=10) {
		echo "abc" . " ";
	$counter++;	
	}
	
		
	echo "<br>";

	$counter=0;

	while ($counter<=10) {
		echo "xyz" . " ";
	$counter++;
	}
	echo "<br />";
	echo "<br />";

	$numb=1;

	while ($numb<=100) {
		//echo $numb . " ";
		if ($numb % 5==0 && $numb % 3==0) {
			echo "MARCO-pollo" . " ";	
		} elseif ($numb % 5==0) {
			echo "multiple of five" . " ";
		} elseif ($numb % 3==0) {
			echo "multiple of three" . " ";
		}else {
			echo "$numb" . " ";
		}
		$numb++;
	}
			
	 ?>
</body>
</html>
