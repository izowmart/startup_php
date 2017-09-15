<!DOCTYPE html>
<html>
<head>
	<title>switch Practice</title>
</head>
<body>
	<?php 
		$weather="calm";
		switch ($weather) {
			case 'cloudy':
				echo "<em>You should get an umbrella</em>";
				break;
			case 'windy':
				echo "<em>You should wear tight clothes</em>";
				break;
			case 'sunny':
				echo "<em>You should get an umbrella and wear loose clothes</em>";
				break;
			case 'rainy':
				echo "<em>You should get an umbrella and warm clothes</em>";
				break;
			default:
				echo "<em>Need no worry,it's a calm day</em>";
		}
	 ?>
</body>
</html>