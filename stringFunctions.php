<!DOCTYPE html>
<html>
<head>
	<title>Inbuilt PHP String Functions</title>
</head>
<body>
	<h2>Inbuilt PHP String Functions</h2>
	<?php 
		$myVariable = "who let the do out";
		echo "Get the lenght of a string <br>";
		echo strlen($myVariable) . "<br>";
		echo "Count the number of words in a string <br>";
		echo "The number of words in my string is " . str_word_count($myVariable) . "<br>";
		echo "To reverse a string,you use " . strrev($myVariable) . "function <br>";
		$first = "the quick brown fox ";
		$second = "jumped over the lazy dog.";
		$third = $first;
		$third .=$second;
		echo $third;
		echo "<br>";
		echo "Lowercase: " .strtolower($third);
		echo "<br>";
		echo "uppercase : " .strtoupper($third);
		echo "<br>";
		echo "Uppercase first : " .ucfirst($third);
		echo "<br>";
		echo "Uppercase first word : " .ucwords($third);
		echo "<br>";
		echo "find : " .strstr($third, "lazy");
		echo "<br>";
		echo "Replace string: " . str_replace("quick", "super-fast",$third);

	 ?>

</body>
</html>