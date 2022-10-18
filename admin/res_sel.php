<?php 
		$post = $position['position'];
        $sql = "SELECT cand_id, firstname, lastname, position, result FROM candidates WHERE position = '$post' order by result desc";
        $query4 = mysqli_query($conn, $sql);
        $get = mysqli_fetch_all($query4, MYSQLI_ASSOC);
                     
              
 ?>
