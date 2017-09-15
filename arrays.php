<!DOCTYPE html>
<html>
<head>
	<title>php arrays</title>
</head>
<body>
	<H3>Working with arrays in php</H3>
	<?php 
		// an array stores multiple values in a single variable
		// indexed arrays
	echo "<h2>Indexed Arrays</h2>";
	$myArray = array(1, 24, "strings", false, 23.14, Array(45,42.3,"cars"));
	echo "Array at the sixth position is an array :" . $myArray[4] . "<br />";
	echo "Array at the sixth position is an array :" . $myArray[5][2];
	echo "<pre>";
	print_r($myArray);
	echo "</pre>";
	echo "<br /";
	$numbers = [23, 45, "izow"];
	print_r($numbers);
	$numbers[3] = "mart";
	echo "<br /";
	print_r($numbers);
	echo "<br /";
	echo "<br /";
	echo "<h3> an associative array</h3>";
	$assoc =array ("first_name" =>"isaac","last_name"=>"mutahi", "hobby"=>"swimming", "best_site"=>"twitter");
	print_r($assoc);
	echo "<br /";
	echo "My name is: ".$assoc["first_name"] ." " .$assoc["last_name"] ." " ."and my hobby is " . " " . $assoc["hobby"] . " " .",my bestSite is" . $assoc["best_site"];
	echo "<br /";
	$marks=array("Richie"=>array("php"=>42,"css"=>74,"html"=>89),"Richie"=>array("php"=>69,"css"=>83,"html"=>24));
	print_r($marks);
	echo "<br /";
	echo "my name is";
	echo "<h2>Array function</h2>";
	$marks =array(42,47,86,95,26,1,5,);
	echo "<pre>";
	print_r($marks);
	echo "</pre>";
	echo "Count items in an array: " . count($marks) . "<br>";
	echo "maximum value in array:" . max($marks) ."<br>";
	echo "minimum value in array:" . min($marks) ."<br>";
	echo "sort in array:" . sort($marks) ."<br>";
	echo "<pre>";
	print_r($marks);
	echo "</pre>";
	echo "Reverse sort in array:" . rsort($marks) ."<br>";
	echo "<pre>";
	print_r($marks);
	echo "</pre>";
	echo $num_string = implode("*", $marks);
	echo "<br /";
	print_r($num_string);
	var_dump($marks);
	echo "Is in array: " . in_array(86, $marks);
	echo "<br /";
	$inArray=in_array(45, $marks);
	if ($inArray) {
		echo "number is in the array";
	}else{
		echo "number not found";
	}

	 ?>
</body>
</html>