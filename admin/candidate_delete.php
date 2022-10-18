<?php 
 include 'includes/conn.php';
 		if(isset($_GET['delete'])){
 			$id = $_GET['delete'];

 			$sql = "DELETE candidates , voters FROM candidates INNER JOIN voters  WHERE candidates.voter_id = voters.voter_id AND candidates.voter_id= '$id'";
 		$run = mysqli_query($conn, $sql);

 		if($run){
 			$sql2 = "DELETE FROM users WHERE users.voter_id = '$id'";
 			$run2 = mysqli_query($conn, $sql2);

 			if($run2){
 				$_SESSION['msg'] = "Candidate has been deleted successfully!";
				$_SESSION['msg-typ'] = "danger";

				$sql3 = "DELETE FROM counts WHERE counts.voter_id = '$id'";
				$query3 = mysqli_query($conn, $sql);

				if($query3){
				$_SESSION['msg'] = "Candidate and votes have been deleted successfully!";
				$_SESSION['msg-typ'] = "danger";
				}

				header("location:candidates.php");



 			}
 		}else{
 			echo "error";
 		}
 
 			
 		}

 ?>

 

		
 