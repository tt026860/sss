<?php 
 
$sql = "SELECT comm FROM admin";
$query = mysqli_query($conn, $sql);

$res = mysqli_fetch_all($query, MYSQLI_ASSOC);
$comm = $res[0];

 ?>