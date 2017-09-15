<!DOCTYPE html>
<html>
<head>
	<title>function array</title>
</head>
<body>
	<?php
	$students=array("Mary","Karanja","Kanyi","Gilbert","Rose","Caro","Kelvin","Quest");
	// print_r($students);
	function halla($students){
		if(is_array($students)){
			foreach ($students as $person) {
				echo "Niaje msee" . $person;
				echo "<br>";
			}
		} else{
			echo "Hi everyone";
		}
	}
	halla($students);

	 ?>
</body>
</html>