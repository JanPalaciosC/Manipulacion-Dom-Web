<?php
	$mysqli = new mysqli("localhost", "root", "", "formulario");

	$sql = "SELECT * FROM usuarios";
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
			<td><?=$row['email'];?></td>
			<td><?=$row['password'];?></td>
			<td><?=$row['year'];?></td>
		</tr>
<?php	
	}
	}
	else {
		echo "0 results";
	}
	mysqli_close($conn);
?>