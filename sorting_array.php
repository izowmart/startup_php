<!DOCTYPE html>
<html>
<head>
	<title>sorting Array</title>
</head>
<body>
	<?php 
		/*creat an array with the following values:Tokyo,mexico city,newtork mumbai seoul shanghai,lagos buenos aires,cairo,landon.print these values to the browser separated by commas,usin a loop to iterate over the array.sort the array,then print the values to the browser in an unordered list,again usin a loop.add the folling cities to the array:los angles,calcutta,osaka,beijing.sort the array again,and print it once more to the browser in an unordered list.*/
		echo "<h3>This an Exercise 1<h3/>";

	 	$cities = array("Tokyo", "mexico_city", "Newyork_city", "Mumbai","Seoul", "Shanghai","Lagos", "Buenos_airies","Cairo", "Landon",);
	 	var_dump($cities);
	 	echo "<br /> <hr>";
	 	// print values of array to browser,sparated by commas.
	 	foreach ($cities as $city) {
	 		echo $city . ", ";
	 	}
	 	// sorting array
	 	sort($cities);
	 	echo "<br>";
	 	var_dump($cities);
	 	// print array in unordered list
	 	echo "<ul>";
		 	foreach ($cities as $city) {
		 		echo "<li>$city</li>";
		 	}
		 echo "</ul>";
		 var_dump($city);
		 echo "<br> <hr>";
		 $cities[] = "Mogadishu";
		 var_dump($cities);
		 echo "<br /> <hr>";
	 	
	 	/*2.here's the list,this time including countries as well as cities:tokyo,japan:mexico city,mexico;new york city,usa;mumbai,india;korea;shanghai,chaina;lagos,naigeria;buenos airies,argentina;cairo,egypt;london,england.this time,create an associative array,using the countries as keys,the cities as values,return the statement scity is in scountry.*/
	 	$countries = Array(
	 		"kenya"=> "Nairobi",
	 		"Uganda"=> "Kampala",
	 		"Tanzania"=> "Daresaalam",
	 		"Nigeria"=> "Lagos"
			);
	 	foreach($countries as $country => $city) {

	 		echo $city ." is in" . $country . "<br>";
	 	}
	 	



	 	// // $country =array()
	 	// echo "<br /> <hr>";
	 	// $students=array("Mary","Karanja","Kanyi","Gilbert","Rose","Caro","Kelvin","Quest");
	 	// // var_dump($students);
	 	// // foreach ($students as $index => $name) {
	 	// // 	echo "Hi " .$name ."<br>";
	 	// // }
	 	// $length =count($students);

	 	// for ($i=0; $i <$length; $i++) {
	 	//  	echo "<br />";
	 	// 	echo "Hi: ". $students[$i];
	 	// }
	 	// echo "<br /> <hr>";
	 	// echo "<h4>Calling a function that generate names in the array<h4/>";

	 	// function names($i){
	 	// 	for ($i=0; $i <$length; $i++) {
	 	//  	echo "<br />";
	 	// 	echo "Hi: ". $students[$i];
	 		
	 	// }
	 	// names($i);
	 ?>
</body>
</html>