<?php 
 
 	$sql = "SELECT * FROM positions order by priority"; 
 	$result = mysqli_query($conn,$sql);
 	$positions = mysqli_fetch_all($result, MYSQLI_ASSOC);	 
  ?>