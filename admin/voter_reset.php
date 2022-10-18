<?php 
 include 'includes/conn.php';
if(isset($_POST['del'])){ 
		$passs = mysqli_real_escape_string($conn, $_POST['pass']);
  		$sqlt = "SELECT * FROM admin WHERE id = '".$passs."'";
  		$query = mysqli_query($conn, $sqlt);

  		if(mysqli_num_rows($query) ===1){
			$rank = 0;
			$sql = "DELETE voters , users,  FROM voters INNER JOIN users  WHERE voters.rank = users.rank  AND users.rank = '$rank' ";
			$result = mysqli_query($conn, $sql);

			if($result){

				$sql3 = "DELETE FROM counts WHERE rank = '$rank'";
				$query3 = mysqli_query($conn, $sql3);

				$_SESSION['msg'] = "All voters and their counts have been reset successfully!";
				$_SESSION['msg-typ'] = "danger";
			}else{
				$_SESSION['msg'] = "All voters  have been reset successfully!";
				$_SESSION['msg-typ'] = "danger";
			}
				
					
			} 	  		
  	else{
  				$_SESSION['msg'] = "Only admin is allowed to reset voters!";
				$_SESSION['msg-typ'] = "warning";
				  
  	}

  		 header("location: voters.php");
	}


 ?>


 			  