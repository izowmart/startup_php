<?php 
// create a data base connection
	$host_server = "localhost";
	$username = "mart";
	$password = "mightmight";
	$dbname = "iebc";

	$conn=mysqli_connect($host_server,$username,$password,$dbname);
// Test if connection occured successfuly.
	if (!$conn) {
		die("Database connection failed! <br />" . mysqli_connect_error());
	}
	echo "Connection successfull! <br />";
// perform a database query
	$query ="SELECT * FROM voters_mngt";
	$result= mysqli_query($conn,$query);
// Test if thhere was a query error.
	if (!$result) {
	 	die("Database query failed! <br />" . mysqli_error());

	 } 
	 echo "Query successful <br />";
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>IEBC voters management system</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron text-center">
			<h1>IEBC Voter Management System</h1>
			<p class="text-primary">PHP/mySQL CRUD operations</p>
		</div>
	</div>
	<div class="container-fluid bg-success" >
		<h3 class="text-center text-info">Post DATA to the DB</h3>
		<form method="POST" action="voters_mng.php">
			<div class="row text-center">
				<div class="col-md-6">
					<div class="form-group">
						<label>Name:
							<input type="text" name="Name" class="form-control" placeholder="Enter Your Full Names" required>
						</label>
					</div>
					<div class="form-group">
						<label>ID:
							<input type="number" name="ID" class="form-control" placeholder="Enter Your ID" required>
						</label>
					</div>
					<div class="form-group">
						<label>County:
							<input type="text" name="County" class="form-control" placeholder="Enter Your County" required>
						</label>
					</div>	
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Date:
							<input type="date" name="Date" class="form-control" placeholder="Enter The Date" required>
						</label>
					</div>
					<div class="form-group">
						<label>Polling_station:
							<input type="text" name="Polling_station" class="form-control" placeholder="Enter Your Polling Station" required>
						</label>

					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Submit" class="btn btn-success">
					</div>	
				</div>	
			</div>		
		</form>
	</div>
	<div class="container-fluid">
		<h4 class="text-center text-success">Read from the mySQL Database</h4>
		<table class=" table table-striped table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>ID</th>
					<th>County</th>
					<th>Date</th>
					<th>Poling_station</th>
					<th id="edit" >Update</th>
					<th id="del">Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				// Use the returned data if any
				// iterate the array result and use the data in the table
				while ($row=mysqli_fetch_assoc($result)) {
					echo "<tr>
							<td>$row[No]</td>
							<td>$row[Name]</td>
							<td>$row[ID]</td>
							<td>$row[County]</td>
							<td>$row[Date]</td>
							<td>$row[Polling_station]</td>
							<td> <a href ='voters_mng.php?edit_id=$row[No]' class ='btn btn-warning'>Edit</td>
							<td> <a href ='voters_mng.php?del_id=$row[No]' class ='btn btn-danger'>Delete</td>
						</tr>";
				}
				 ?>
			</tbody>
		</table>
		
	</div>
</body>
</html>
<?php
 //process user input and push data to the DB
 	if (isset($_POST['submit'])) {
 	 	$Name = $_POST['Name'];
 	 	$ID = $_POST['ID'];
 	 	$County = $_POST['County'];
 	 	$Date = $_POST['Date'];
 	 	$Polling_station = $_POST['Polling_station'];
// push data to the DB
 	 	$insert = "INSERT INTO voters_mngt (No, Name,ID,County,Date,Polling_station) VALUES (Null,'$Name','$ID','$County','$Date','$Polling_station')";
 	 	// RUN THE QUERY
 	 	$query=mysqli_query($conn,$insert);
 	 	if ($query) {
 	 		echo "Insert Successful";
 	 		?>
 	<script>window.location ="voters_mng.php"</script>
 	<?php
	 	} else {
	 	 	 		// header("location: voters_mng.php");
		 	die("query failed! <br />" . mysqli_error($conn));
		  
		 echo "Query successful <br />";
	 		
 		} 

 	}
 	 
 ?>
 <?php 
 	if (isset($_GET['del_id'])) {
 		$query_del ="DELETE FROM voters_mngt WHERE No ='$_GET[del_id]'";
 		// run query
 		if (mysqli_query($conn,$query_del)) {
 			// reload page if query succeful
 			echo "Delete Successful";?>
 			<script>
 				window.location = "voters_mng.php";
 			</script>
 			<?php
 		}else{
 			die("Delete failed: ". mysqli_error($conn));
 		}
 	}
  ?>
 