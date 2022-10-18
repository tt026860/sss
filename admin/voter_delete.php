<?php 
include 'includes/conn.php';
session_start();
if(isset($_GET['delete'])){
		$id = $_GET['delete'];

		$sql = "DELETE voters , users FROM voters INNER JOIN users  WHERE voters.voter_id = users.voter_id  AND users.voter_id =  '$id'";

		$result = mysqli_query($conn, $sql);

		if($result){
			$sql2 = "DELETE FROM counts WHERE counts.voter_id= '$id'";
			$query2 = mysqli_query($conn, $sql2);

		$_SESSION['msg'] = "Voter has been deleted successfully!";
		$_SESSION['msg-typ'] = "danger";

		if($query2){
			$_SESSION['msg'] = "Voter and votes  have been deleted successfully!";
		$_SESSION['msg-typ'] = "danger";
	}else{
		echo mysqli_error($conn);
	}
			
		}else{
			echo 'error'. mysqli_error($conn);
		}
  
  		header('location: voters.php');
	}


 ?>