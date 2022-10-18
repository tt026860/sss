<?php  
$sql1 = "SELECT * FROM voters WHERE username = '".$_SESSION['username']."'";
		$result2 = mysqli_query($conn, $sql1);
		$voter = mysqli_fetch_array($result2);
		$_SESSION['id'] = $voter['voter_id'];

 ?>

