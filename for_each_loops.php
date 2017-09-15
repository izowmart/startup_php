<!DOCTYPE html>
<html>
<head>
	<title>For each loops</title>
</head>
<body>
	<?php 
		$hobbies =array("swimming","watching","gaming");
		$arrayLength = count ($hobbies);
		echo $arrayLength ."<br />";
		// echo $arraylenght
		for ($i=0; $i <$arrayLength ; $i++) { 
			echo $hobbies[$i];
			echo "<br />";
		}
		echo "<h4>Using a for each loop in an index array<h4/>";
	 	$ages = array(19,45,47,1,65,21,48,10,49);
	 	$arraylth = count($ages);
	 	for ($i=0; $i <$arraylth ; $i++) { 
	 		echo "<br />";
	 		echo "item at index" ." " . $i. ":". $ages[$i];
	 	}
	 	echo "<br />";
	 	// foreach loop
	 	foreach ($ages as $age) {
	 		echo "Age: " .$age . "<br />";
	 	}
	 	echo "<br />";
	 	echo "For each in an associative array <br />";
	 	$grades = array("richie" =>42,"conne" =>45, "mart"=>75,"musafa"=>78);
	 	print_r($grades);
	 	echo "<br />";
	 	foreach ($grades as $key => $gradeValue) {
	 		echo "Named-key= ".$key . $gradeValue . "<br />";
	 	}
	 	echo "<hr>";
	 	$person =array(
	 		"first_name"=>"Isaac",
	 		"last_name"=>"Mutahi",
	 		"address"=>"Pangani Nairobi",
	 		"Country"=>"Kenya",   
	 		"Email"=>"izowmart7@gmail.com");
	 	foreach ($person as $attribute => $data){
	 		$attr_pretty = ucwords(str_replace("_", " ", $attribute));
	 		echo " $attr_pretty : $data <br />";
	 	}
	 	echo "<hr>";
	 	

	 ?>

</dl>
</body>
</html>