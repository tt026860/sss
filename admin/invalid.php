<?php 

 	$sql = "SELECT * FROM voters where status=''"; 
 	$result = mysqli_query($conn,$sql);
 	$num = mysqli_num_rows($result);	 
  ?>
