<!DOCTYPE html>
<html>
<head>
	<title>For Loop</title>
</head>
<body>
	
<?php 
	// <!-- a for loop is a compact vervision of a while loop which executes a block of code, a specified number of time
	// 	syntax
	// 		for(initialize counter;test counter;increment counter){
	// 	code to be executed
	// 		} -->
	
	$init=0;
	while ($init <=10) {
		echo $init ."while ";
		$init +=2;
	}
	echo "<br />";
	for ($count=0; $count <=10; $count+=2) { 
		echo $count ."for ";
	}
	echo "<br />";
	for ($z=1; $z <=12 ; $z++) { 
		$square = $z *$z;
		echo "$z * $z = $square <br />";
	}
	for ($i=1; $i<=20 ; $i++) { 
		for ($k=1; $k<$i ; $k++) { 
			echo "#";
	
		}
	echo "	";
	}
// html table involves a lot of repetitive coddin.aperfext place to use for loops.you can do even mor if you nest the for loops.in this php exercise,use two for loops,one nested inside another.create the following multiplication table:1234567
	
 ?>
</body>
</html>