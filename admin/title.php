<?php 

 	$sql = "SELECT  school FROM admin"; 
 	$resultsss = mysqli_query($conn,$sql);
 	$titles = mysqli_fetch_array($resultsss);	 
 	$title = strtoupper($titles[0]);	 
  ?>
