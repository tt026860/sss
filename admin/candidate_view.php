<?php

 include 'includes/conn.php'; 
  $userid = $_POST['userid'];

  $sql  = "SELECT * FROM candidates WHERE cand_id = '$userid'";
  $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result) ){
 ?>

<div class="text-center">
  <h2>
    <?php echo $row['firstname'] .  $row['lastname']; ?>
  </h2>
</div>
 <table class="b-0" >
   <tr>
     <td width="250"><?php if($row['image'] == ""):?>
       <img style="height: 200px; width: 200px;" src="uploads/default/default.png ?>">
       <?php else:  ?>
       <img style="height: 200px; width: 200px;" src="uploads/<?php echo $row['image']; ?>"> 
     <?php endif; ?>

     </td>
     <td >
       <p><b><?php echo strtoupper($row['cand_id']); ?></b></p>
       <p>Firstname: <?php echo $row['firstname']; ?></p>
       <p>Lastname: <?php echo $row['lastname']; ?></p>
       <p>Class: <?php echo $row['class']; ?></p>
       <p>Stream: <?php echo $row['stream']; ?></p>
       <p>Position: <?php echo $row['position']; ?></p>
       <p>Comment: <?php echo $row['comment']; ?></p> 
     </td>
   </tr>
 </table>

 <?php } ?>