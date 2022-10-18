
<?php  
 
	$sql = "SELECT * FROM positions order by priority";
  	$result = mysqli_query($conn,$sql);
  	$positions = mysqli_fetch_all($result, MYSQLI_ASSOC);
 	
 	$get = ($positions[1]);
 	$res = $get['position'];

   
   $sql2 = "SELECT * FROM candidates where position ='$res' order by result desc";
  	$result2 = mysqli_query($conn,$sql2);
  	$finale = mysqli_fetch_array($result2);

  	$last = $finale[3]  ;
 
 ?> 