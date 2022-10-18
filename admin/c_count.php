<?php 
$sql = "SELECT * FROM candidates";
  $result = mysqli_query($conn,$sql);

  $candidates = mysqli_fetch_all($result, MYSQLI_ASSOC);
 ?>