<?php

 include 'includes/conn.php'; 
  $user = $_POST['user'];

  $sql  = "SELECT rank, photo FROM voters WHERE voter_id = '$user'";
  $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result) ){

 ?>
<?php if($row['rank'] == 1): ?>
         <?php if($row['photo'] == ""):?>
            <img style="height: 300px; width: 300px; " src="voters/default/default.png ?>">
          <?php else: ?>
            <img style="height: 300px; width: 300px;" src="uploads/<?php echo $row['photo']; ?>"> 
          <?php endif; ?>

      <?php else: ?>
            <?php if($row['photo'] == ""):?>

            <img style="height: 300px; width: 300px; " src="voters/default/default.png ?>">
          <?php else: ?>

            <img style="height: 300px; width: 300px;" src="voters/<?php echo $row['photo']; ?>"> 
          <?php endif; ?>
  <?php endif; ?>
 

 <?php } ?>


