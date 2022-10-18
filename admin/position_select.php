<?php 
	
	$sql = "SELECT * FROM positions ORDER BY priority";

	$result = mysqli_query($conn, $sql);
	
 ?>