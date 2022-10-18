<?php

 include 'includes/conn.php'; 
  $userid = $_POST['userid'];

  $sql  = "SELECT firstname, lastname,comment FROM candidates WHERE cand_id = '$userid'";
  $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result) ){
 ?>
 <div class="text-center">
 	 <h4>
    <?php echo $row['firstname'] .  $row['lastname']; ?> 
  </h4>

  <p class="lead"><?php echo $row['comment']; ?></p>
 </div>
 <?php } ?>