<?php 
 include 'includes/conn.php';
if(isset($_POST['del'])){ 
		$passs = mysqli_real_escape_string($conn, $_POST['pass']);
  		$sqlt = "SELECT * FROM admin WHERE id = '".$passs."'";
  		$query = mysqli_query($conn, $sqlt);

  		if(mysqli_num_rows($query) ==1){
		$rank = 1;
 

 		$sql = "DELETE  FROM positions";

		if(mysqli_query($conn, $sql)){
			$sql2 =  array("candidates", "users", "voters");
			foreach($sql2 as $dell){
				$ss = "DELETE FROM $dell WHERE rank = '$rank'";
				$q = mysqli_query($conn, $ss);
			}
			
			if($q){
				$_SESSION['msg'] = "All positions reset successfully successfully!";
				$_SESSION['msg-typ'] = "danger";
				}
 
		}else{
			echo ' query-error' . mysqli_error($conn);
		}
 		   		
  	}else{
  				$_SESSION['msg'] = "Only admin is allowed to reset voters!";
				$_SESSION['msg-typ'] = "warning";
				  
  	}

  		 header("location: voters.php");
	}


 ?>


 			  