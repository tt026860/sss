<?php 
	include 'includes/conn.php';


	if(isset($_POST['edit_candidate'])){
		$voter_id  = mysqli_real_escape_string($conn, $_POST['voter_id']);
		$cand_id  = mysqli_real_escape_string($conn, $_POST['cand_id']);
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$class = mysqli_real_escape_string($conn, $_POST['class']);
		$position = mysqli_real_escape_string($conn, $_POST['position']);
		$comment = mysqli_real_escape_string($conn, $_POST['comment']);

	if($position == '--select position--'){
			$_SESSION['msg'] = "Failed to insert! <br> failed to select position !";
			$_SESSION['msg-typ'] = "danger";
		}else{


		$sql = "UPDATE voters  SET firstname = '$firstname', lastname = '$lastname'  WHERE voter_id = '$voter_id'";

	if(mysqli_query($conn, $sql)){
		$sql2 = "UPDATE candidates  SET   cand_id = '$cand_id', firstname = '$firstname', lastname = '$lastname', class ='$class', comment = '$comment', position = '$position' WHERE voter_id = '$voter_id'";
		$query2 = mysqli_query($conn, $sql2);

		if($query2){

		$_SESSION['msg'] = "Candidate has been updated successfully!";
		$_SESSION['msg-typ'] = "warning";
		}
		
	}else{
		 echo 'query-error' . mysqli_error($conn);
	}
		 
	}
	header("location:candidates.php");
}

 ?>