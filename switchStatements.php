<!DOCTYPE html>
<html>
<head>
	<title>switch statements</title>
</head>
<body>
	<?php 
		// the switch is used to perform different actions based on different conditions
		/* syntax
				switch(value){
				case test value eg 1:code to be run;
					break;
				default :code to be run incase all the case values have been exhausted;
				}
		*/
		
	 ?>
	 <h2>Chinese Zodiac</h2>
	 <?php 
	 	// whitespaces don't matter
	 	// Colons,semicolons and breaks do matter
	 	$yearOfBirth =1994;
	 	switch(($yearOfBirth -4) % 12){
	 		case 0: $Zodiac ="Rat";break;
	 		case 1: $Zodiac ="cow";break;
	 		case 2: $Zodiac ="chicken";break;
	 		case 3: $Zodiac ="hyena";break;
	 		case 4: $Zodiac ="lion";break;
	 		case 5: $Zodiac ="monkey";break;
	 		case 6: $Zodiac ="Rat";break;
	 		case 7: $Zodiac ="pig";break;
	 		case 8: $Zodiac ="parrot";break;
	 		case 9: $Zodiac ="moon";break;
	 		case 10: $Zodiac ="dog";break;
	 		case 11: $Zodiac ="dragon";break;
	 	}
	 	echo "$yearOfBirth is the year of the $Zodiac <br />";
	 	echo $user_ip = $_SERVER['REMOTE_ADDR'];
	  ?>
</body>
</html>