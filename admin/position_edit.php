<?php 
include 'includes/conn.php';
if(isset($_POST['edit_position'])){
		$id = mysqli_real_escape_string($conn, $_POST['id']);

		$position_update = mysqli_real_escape_string($conn, $_POST['position']);
		$pri = mysqli_real_escape_string($conn, $_POST['priority']);

		$sql = "UPDATE positions  SET position = '$position_update', priority = '$pri' WHERE id='$id'";

	if(mysqli_query($conn, $sql)){
		
		$_SESSION['msg'] = "position has been updated successfully!";
		$_SESSION['msg-typ'] = "warning";
	}else{
		echo 'query-error' . mysqli_error($conn);
	}

	header('location:positions.php');
	}

 ?>