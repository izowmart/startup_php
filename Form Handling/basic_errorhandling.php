<!DOCTYPE html>
<html>
<head>
	<title>Basic error handling and form validation</title>
</head>
<body>
	<h2>basic error handling using the Die() function</h2>
	<?php 

	// if (!file_exists("file.pdf")) {
	// 	die("the file you are trying to open,does not exisist or you don't have sufficient priviledges to view");
	// }else{
	// 	$file =fopen("file.pdf", "r");
	// }

	 ?>
	 <h2>Validation</h2>
	 <?php
	  //*presence
	 $value ="djsjk";
	 if (!isset($value) || empty($value)) {
	 	echo "Validation failed!value cannot be empty";
	 }
	  //*string length
	 $value="yeno";

	  // *minimum value
	 $min = 5;
	 if (strlen($value)< $min) {
	 	echo "validation failed.must be more than five characters <br>";
	 }
	 // maximum value
	 $value ="dhfjowaeifpjwqdaslpweoaskpokak";
	 $max =12;
	 if (strlen($value)> $max) {
	 	echo "validation failed!must be less than twelve characters <br>";
	 }
	 // type
	 $value = 1;
	 if (!is_string($value)) {
	 	echo "validation failed.value must be a string <br>";
	 }
	 // inclusion in an array/set
	 $set =array("connie", "mart", "james");
	 $value ="isaac";
	 if(!in_array($value, $set)){
	 	echo "value not found";
	 }
	   ?>
</body>
</html>