<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<h3>please enter your weather</h3>
	<?php 
		// if form is not submitted
	if (!isset($_POST['submit'])) {
		// display form
	
	 ?>
	 <form action="user_input_array.php" method="POST">
	 	<P>Kindly enter your infor</P>
	 	City: <input type="text" name="city">
	 	Month: <input type="text" name="month">
	 	Year: <input type="text" name="year">
	 	<p>kindly choose the weather you're experienced from the below list</p>
	 	<input type="checkbox" name="weather[]" value="sunshine"> Sunshine <br>
	 	<input type="checkbox" name="weather[]" value="cloudy"> Cloudy <br>
	 	<input type="checkbox" name="weather[]" value="snowy"> Snowy <br>
	 	<input type="checkbox" name="weather[]" value="windy"> Windy <br>
	 	<input type="checkbox" name="weather[]" value="cold"> Cold <br>
	 	<input type="checkbox" name="weather[]" value="hail"> Hail <br>
	 	<input type="submit" name="submit" value="Submit form">
	 </form>
	 <?php 
	 }else {
	 	// retrive date and location
	 	$user_input=array($_POST['city'],
	 		$_POST['month'],
	 		$_POST['year']
	 		);
	 	echo "In ". $user_input[0] . "in the month of " . $user_input[1]." " ."you experienced the following weather : <br> 
	 	<ul>";
	 	// save weather array into a variable
	 	$condition =$_POST['weather'];
	 	// iterate through the array to show the user choice
	 	foreach ($condition as $key){
	 		echo "<li>$key</li> ";
	 	}
	 	echo "</ul>";
	 }	
	  ?>

</body>
</html>