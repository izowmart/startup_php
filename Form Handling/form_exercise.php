<!DOCTYPE html>
<html>
<head>
	<title>Form Exercise</title>
</head>
<body>
	<h4>Kindly input the weather that you have experienced while enjoying your stay here.</h4>
	<form action="form_exercise.php" method="POST">
	<label>City:
		<select name="city" >
			<option></option>
			<option value="nairobi">Nairobi</option>
			<option value="cairo">Cairo</option>
			<option value="kampala">Kampala</option>
			<option value="tunis">Tunis</option>
			<option value="cape_town">Cape_town</option>
			<option value="lagos">Lagos</option>
			<option value="addis_ababa">Addis_ababa</option>
		</select>
	</label>
	<label>Month:
		<select name="month">
			<option></option>
			<option value="January">January</option>
			<option value="February">February</option>
			<option value="March">March</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="Octomber">Octomber</option>
			<option value="November">November</option>
			<option value="December">December</option>
		</select>
	</label>
	<label>Year:
		<select name="year">
			<option></option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
		</select>
	</label>
		<br />
		<input type="checkbox" name="rain">:Rain <br> 
		<input type="checkbox" name="sunshine">:Sunshine <br>
		<input type="checkbox" name="hail">:Hail <br>
		<input type="checkbox" name="sleet">:Sleet <br>
		<input type="checkbox" name="snow">:Snow <br>
		<input type="checkbox" name="clouds">:Clouds <br>
		<input type="checkbox" name="wind">:Wind <br><br />
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php 
		$city=array("nairobi","cairo","kampala","tunis","cape_town","lagos","addis_ababa");
		$month=array("January","February","March","April","May","June","July","August","September","Octomber","November",
			"December");
		$year=array("2017","2016","2015","2014","2013","2012","2011","2010","2009","2008","2007","2006","2005","2004","2003");
		
		if (isset($_POST["city"])) {
				echo "";
		}
	 ?>
</body>
</html>