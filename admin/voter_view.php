<?php

 include 'includes/conn.php'; 
  $userid = $_POST['userid'];

  $sql  = "SELECT * FROM voters WHERE voter_id = '$userid'";
  $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result) ){

      $sql2 = "SELECT username, password FROM users WHERE voter_id = '".$row['voter_id']."'";
      $query = mysqli_query($conn, $sql);
      $ressss = mysqli_fetch_array($query);
    
 ?>

<div class="text-center">
  <h4>
    <?php echo strtoupper($row['firstname'] . " ".  $row['lastname']); ?>
  </h4>
</div>
 <table class="b-0" width="100%">
   <tr>
     <td width="250">
    <?php if($row['rank'] == 1): ?>
         <?php if($row['photo'] == ""):?>
            <img style="height: 200px; width: 200px; " src="voters/default/default.png ?>">
          <?php else: ?>
            <img style="height: 200px; width: 200px;" src="uploads/<?php echo $row['photo']; ?>"> 
          <?php endif; ?>

      <?php else: ?>
            <?php if($row['photo'] == ""):?>

            <img style="height: 200px; width: 200px; " src="voters/default/default.png ?>">
          <?php else: ?>

            <img style="height: 200px; width: 200px;" src="voters/<?php echo $row['photo']; ?>"> 
          <?php endif; ?>
  <?php endif; ?>

     </td>
     <td >
       <p><b><?php echo $row['voter_id']; ?></b></p>
       <p>Firstname: <?php echo $row['firstname']; ?></p>
       <p>Lastname: <?php echo $row['lastname']; ?></p>
        <p>username: <?php echo $row['username']; ?></p>
       <p>password: <?php echo $row['password']; ?></p> 
     </td>
   </tr>
 </table>

 <?php } ?>
 