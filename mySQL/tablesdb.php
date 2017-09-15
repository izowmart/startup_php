<?php 
	$hostname = "localhost";
	$username = "izowmart";
	$userpass = "mightmight";
	$dbname = "potusDB";
//  creating a database and connecting to it
	$conn=mysqli_connect($hostname,$username,$userpass,$dbname);
	if (!$conn) {
		die("Connection failed!" . mysqli_connect_error());
	}
	echo "Connection successful <br>";
	// perform a query to the database
	$query = "SELECT * FROM voters_reg";
	$result = mysqli_query($conn,$query);

	if (!$result) {
		die("Database query failed! <br>");
	}
	echo "DataBase query successful!<br>";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>creating a table and inserting the fetched results from our DB</title>
 </head>
 <body>
 	<h2>A table that consist of data fetched from our DB</h2> <br />
 	 <table border="black 2px solid">
 	 	<thead>
 	 		<td>ID</td>
 	 		<td>NAME</td>
 	 		<td>CONSTITUENCY</td>
 	 		<td>POLLING_STATION</td>
 	 		<td>AGE</td>
 	 	</thead>
 	 	<tbody>
 	 		<?php  
 	 		while ($row = mysqli_fetch_array($result)) {
				echo "<tr>
						<td>$row[ID]</td>
						<td>$row[NAME]</td>
						<td>$row[CONSTITUENCY]</td>
						<td>$row[POLLING_STATION]</td>
						<td>$row[AGE]</td>
					</tr>";
 	 			}
 	 		?>
 	 	</tbody>
  	 </table>
 </body>
 </html>