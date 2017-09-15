<!DOCTYPE html>
<html>
<head>
	<title>Nested Loops</title>
</head>
<body>
	<h3>Nested loops</h3>
	<table>
		<tr>
			<td></td>
		</tr>
	</table>
	<?php 
		// generate table data showing the numbers 1-10 multiplied by each other
		// generate a html table inside php
		echo "<table border=\"5\">";
		// starting with rows
		for ($row=1; $row <=10 ; $row++) { 
			echo "<tr> \n";
			// generate each entry in a row to create the columns.
			for ($col=1; $col <=10 ; $col++) { 
				// first do the math
				$tabledata=$col * $row;
				// then send the value to the table with the table data tags.
				echo "<td>$tabledata</td>";
			}
			echo "<tr/>";
		}
		echo "<table/>";
	 ?>
</body>
</html>