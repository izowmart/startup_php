<!DOCTYPE html>
<html>
<head>
	<title>PHP is awesome</title>

</head>
<body>
	<?php
		echo "<h1>Variables-in OOP,variables act as containers for holding values</h1>";
		// this is a single line comment
		/*this is a multi-line comment
		spans more than one line*/
		echo "<p>variable Rules</p>";
		// all variables must start with a dollar sign $
		// A variable must start with either a letter or an underscore with no space after dollar sign
		// $myvariable
		// $_myvariable
		// a variable cannot start with a number
		// variable names are case sensitive $a and $A are two different variables
		// echo phpinfo();
		echo "</ br> PHP data types <br>";
		$string = "hello you <br>";
		echo $string;
		echo "<br>";
		$string2 = "you just chose me!";
		echo $string2;
		echo "<br>";
		$integer = 123;
		echo $integer;
		echo "<br>";
		$double = 12.2;
		echo $double;
		echo "<br>";
		$boolean = false;
		echo $boolean;
		echo "<br>";
		$boolean2 = true;
		echo $boolean2;
		echo "<br>";
		// $array = array(123,"string");
		// echo = $array;
		// $array2 = [123,"string"];
		// echo = $array2;
		// constant variables
		define("CONSTANT", "constant variables can not be redeclared");

		// Concatenation
		$name = "isaac";
		$age = 26;
		$hobby = "swimming";
		$residence = "pangani";

		$Concatenate = "my name is $name and am " . $age ."years old. My hobby is" . $hobby . " and i live in ". $residence;
		echo "<br>";
		echo $Concatenate;
		echo $double;
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<strong>Exercises</strong>";
		echo "<br>";
		echo "<br>";
		echo "'Tomorrow I \'ll learn PHP global variables.'This is a bad command : del C'\ ";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
// calling of functions and use of the arguements
		// $num1 = 10;
		// $num2 = 5;
		// function add ($num1,$num2){
		// 	echo $num1 + $num2 ;
		// 	}
		// add ($num1,$num2);
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		function add ($num1,$num2){
			$result = $num1 + $num2;
			return $result;
		}
		function divide($num1,$num2){
			$result = $num1 / $num2;
			return $result;
		}
		$sum = divide(add(10,10),add(5,5));
		
	 ?>
</body>
</html>