<?php 
 
	$sql1 = "SELECT * FROM positions order by priority";
  	$result = mysqli_query($conn,$sql1);
  	$positions = mysqli_fetch_array($result);

   $first = $positions[1];



  $query = $conn->query("
    SELECT 
      firstname  as name,
        result  as total
    FROM candidates where position = '$first';
 
  ");

  foreach($query as $data)
  {
    $posss[] = $data['name'];
    $total[] = $data['total'];
  }

 


 ?>