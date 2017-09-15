<!DOCTYPE html>
<html>
<head>
	<title>Exircise</title>
</head>
<body>
<h1>https://www.tutorialspoint.com/php/php_cookies.html</h1>
	<?php 
	if (!isset($_POST['submit'])) {
		$modes=array("automobile","jet","train","ferry");
	
	 // ?>
 	// <form action="exercise.php" method="POST">
	 // 	<label>Kindly add on the modes of transport to the text box separated by a comma:<br> 
	 // 		<textarea name="mode[]" placeholder="Enter modes of transport" cols="30" rows="4">
	 			
	 		</textarea><br>
	 	</label>
	 	<input type="submit" name="submit" value="Submit">
	 </form>

	<?php 
	}else{
		// retrive data entered and save it
		$data =array($_POST[])
    }
	$modes=array("automobile","jet","train","ferry");
	echo "Travel takes many forms whether acrose the country or around the world.Here is a list of some common modes of transport <ul>";

	 ?>

	
</body>
</html>