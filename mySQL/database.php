<?php 
	// 1.create a database connection
	$server_name = "localhost";
	$username = "izowmart";
	$dbpass = "mightmight";
	$dbname = "potusDB";
	$conn=mysqli_connect($server_name,$username,$dbpass,$dbname);
	// test if connection occured
	if (!$conn) {
		die("Database connection failed" .mysqli_connect_error());
	}
	echo "<b>Connection successful</b><br>";
 ?>
 <?php 
  	//2.To perform database query
  	$query = "SELECT * FROM voters_reg";
  	$result = mysqli_query($conn,$query);
  	// Test if there was a query error
  	if (!$result) {
  		die("Database query failed! <br>");
  	}
  	echo "DB query successfull <br>";

  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>use the return data from the db</title>
  </head>
  <body>
  	<?php 
  		//3.use returned data (if any)
  		while ($row = mysqli_fetch_assoc($result)) {
  			// output data from each row
  			// print_r($row);
  			// echo "<hr>";
  			echo $row["ID"] . "<br>";
  			echo $row["NAME"] . "<br>";
  			echo $row["CONSTITUENCY"] . "<br>";
  			echo $row["POLLING_STATION"] . "<br>";
  			echo $row["AGE"] . "<br>";
  			echo "<hr>";
  		}
  	 ?>
  
  </body>
  </html>
  <?php 
  	// close database connection
  mysqli_close($conn);
   ?>