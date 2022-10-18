 <?php 
     $query = "SELECT * FROM positions ";
     $result = mysqli_query($conn, $query);

     $positions = mysqli_fetch_all($result, MYSQLI_ASSOC);


  ?>