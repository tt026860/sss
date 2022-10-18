<?php 
	include 'includes/conn.php';


	if(isset($_POST['edit_voter'])){
		$voter_id  = strtoupper(mysqli_real_escape_string($conn, $_POST['voter_id']));
		
		$firstname = strtolower(mysqli_real_escape_string($conn, $_POST['voter_id']));
		$lastname = strtolower(mysqli_real_escape_string($conn, $_POST['lastname']));
		$username = strtolower(mysqli_real_escape_string($conn, $_POST['username']));
		$password = strtolower(mysqli_real_escape_string($conn, $_POST['password']));

		$sql = "UPDATE voters  SET firstname = '$firstname', lastname = '$lastname', username = '$username', password = '$password' WHERE voter_id='$voter_id'";

	if(mysqli_query($conn, $sql)){
		$sql2 = "UPDATE users  SET  username = '$username', password = '$password' WHERE voter_id='$voter_id'";
		$query2 = mysqli_query($conn, $sql2);

		if($query2){

		$_SESSION['msg'] = "Voter has been updated successfully!";
		$_SESSION['msg-typ'] = "warning";
		}
		
	}else{
		echo 'query-error' . mysqli_error($conn);
	}
		header('location:voters.php');
	}


 ?>