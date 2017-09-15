<!DOCTYPE html>
<html>
<head>
	<title>Rectangle Area function</title>
</head>
<body>
	<?php
		// defining the function to calculate the area of a reactangle
	function rec_area($l,$w){
		$area = $l * $w;
		return $area;
	}
	

   ?>
   <h4>Find the area of a rectangle</h4>
   <form action="user_input.php" method="POST">
   		<p>please enter the values in the length and Width of your rectangle</p>
   		<p>Length:<input type="number" name="length" size="8"></p>
   		<p>Width:<input type="number" name="width" size="8"></p>
   		<input type="submit" name="submit" value="Calculate">
   </form>
   	<?php 
   			// if data is not submited,show the form
   		if(!isset($_POST['submit'])){
   		 // show the form
   		}else{
   			// if data is submited,process the input and output the result to the user
   			$l=$_POST['length'];
   			$w =$_POST['width'];
   			// use the function with the user values as arguments
   			echo "The area of the rectangle with the length $l and width $w is =". rec_area($l, $w) . "!!";
   		}
   	?>
   <h3>EXERCISE</h3>
   <ul>
   		<li>CREATE A FORM ASKING THE USER FOR INPUT ABOUT THE WEATHER THE USER HAS EXPERIENCED IN A MONTH OF THE USER'S CHOICE.</li>
   		<li>IN SEPARATE TEXT FIELDS, REQUEST THE CITY,MONTH AND YEAR IN QUESTION</li>
   		<li>BELOW THAT,SHOW A SERIES OF CHECKBOXES USING THIS WAETHER CONDITIONS:RAIN,SUNSHINE,CLOUDS,HAIL,SLEET,SNOW,WIND.SET UP THE FORM TO CREATE AN ARRAY FROM THE CHECHED ITEMS</li>
   		<li>IN THE RESPONCE SECTION OF YOUR SCRIPT,CREATE AN ARRAY USING THE CITY,MONTH AND YEAR THE USER ENTERED AS VALUES.PRINT THE FOLLOWING RESPONSE "IN $CITY,$MONTH AND $YEAR ARE VALUES FROM THE ARRAY YOU CREATED.</li>
   		<li> NEXT LOOP THROUGH THE $WEATHER[]ARRAY YOU RECEIVED FROM THE USER TO SEND BACK A BULLETED LIST WITH THE USER'S RESPONSES.</li>
   </ul>
</body>
</html>