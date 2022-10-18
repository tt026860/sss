<?php 
$sql = "SELECT * FROM positions";
          $query = mysqli_query($conn, $sql);
          $positions = mysqli_fetch_all($query, MYSQLI_ASSOC);
 ?>