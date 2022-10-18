
<?php   
	$sql = "SELECT * FROM positions order by priority";
  	$result = mysqli_query($conn,$sql);
  	$positions = mysqli_fetch_array($result);

   $first = $positions[1];
  

   $sql2 = "SELECT   * FROM candidates where position ='$first' order by result  desc";
  	$result2 = mysqli_query($conn,$sql2); 
  	$test = mysqli_fetch_array($result2);
 
  	$last = $test[3]  ;
 
 ?>  

 