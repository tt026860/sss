<?php 
$sql = "SELECT * FROM voters ";

    $result = mysqli_query($conn,$sql);

    $voters = mysqli_fetch_all($result, MYSQLI_ASSOC);

 ?>