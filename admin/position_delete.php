<?php 
include 'includes/conn.php';
if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$rank = 0;

		$testsql = "SELECT voter_id FROM candidates WHERE candidates.position = '$id'";
		$tquery = mysqli_query($conn, $testsql);
 		 
 		 

 		$sql = "DELETE positions FROM positions  WHERE positions.position = '$id'";

		if(mysqli_query($conn, $sql)){
			$sql2 = "DELETE candidates FROM candidates  WHERE candidates.position = '$id'";

			if(mysqli_query($conn, $sql2)){
						while($row = mysqli_fetch_array($tquery)){
			 		 		 $data = $row['voter_id'];
			 		 		$sql = "DELETE voters, users FROM voters INNER JOIN users ON voters.voter_id = users.voter_id AND voters.voter_id = '$data'";
			 		 	$query = mysqli_query($conn, $sql);
 		 }			if($query){
 		 				$_SESSION['msg'] = "position has been added successfully!";
						$_SESSION['msg-typ'] = "danger";	
 		 }
					else{
						echo ' query-error' . mysqli_error($conn);
					}
				
			}
		}else{
			echo ' query-error' . mysqli_error($conn);
		}
 		 

		


			header('location:positions.php');

	}


 ?>