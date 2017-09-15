<!DOCTYPE html>
<html>
<head>
	<title>functions definations</title>
</head>
<body>
	<?php
	// a function is a block of statements that can be used repeatedly in a script 
	/*syntax
		function functionName($arg1,$arg2)
	*/
		// function defination
		function say_hello(){
			echo "hello world <br />";
		}
		say_hello();
		function add($title,$age){
			echo "Hi,you are"." " . $title . " " . "and your age is" . " " . $age;
		}
		add("Linda",22);
		echo "<br>";
		echo "<br>";

		$name="mart";
		function betterHello($greetings,$target,$punct){
			echo $greetings ." " .$target . "***" ."<br/>";

		}
		betterHello("howdy","my very good sir","!!!!");
		echo "<br>";
		echo "<br>";
		
	  ?>
	  <h2>Funtions return values<h2/>
	  <?php 
	  	function multiply ($val1,$val2){
	  		$product = $val1 * $val2;
	  		return $product;
	  	}
	  	echo "the result of multiplying the two numbers is:" .multiply(20,20);
	  	echo "the result of multiplying the two numbers is: ". multiply(2000,2000);
	  	echo"<br/>";
	  	$result=multiply(234,217);
	  	echo $result;
	  	$result2 = multiply($result,$result);
	  	echo "Result2 is :". $result2;
	  ?>
	  <?php
	  	// function scope // 
	  $bar ="outside"; //global scope
	  function foo(){
	  	$bar ="inside"; // local scope
	  	echo "<br />";

	  }

	 // this php exe has two parts.for the first,you will create a function to accept two arg perform a cal using them,then return a sentence with the result to the browser.the function will calc the area of a rectangle,with the two arg being width and height.(remind:area=width*height)
	  	$cols = 10;
		$rows = 10;
	  echo "<table border=\"1\">";

        for ($r =0; $r < $rows; $r++){

            echo('<tr>');

            for ($c = 0; $c < $cols; $c++)
                echo( '<td>' .$c*$r.'</td></tr>');

        }

        echo("</table>");
        echo "<br />";
        echo "<br />";
	   ?>
</body>
</html>