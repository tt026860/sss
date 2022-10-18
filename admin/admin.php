<?php 
include 'includes/conn.php';
if(isset($_POST['updatepass'])){ 
	$id = mysqli_real_escape_string($conn, $_POST['test']);
	$user = strtolower(mysqli_real_escape_string($conn, $_POST['user']));
	$pass = strtolower(mysqli_real_escape_string($conn, $_POST['pass']));

	$hashed = password_hash($pass, PASSWORD_DEFAULT);

	$sql = "UPDATE admin  SET user = '$user', pass = '$hashed' WHERE id='$id'";
	$query = mysqli_query($conn, $sql);

	if($query){
		$_SESSION['msg'] = " username and password  updated successfully!";
		$_SESSION['msg-typ'] = "success";
	}else{
		echo "error";
	}
 	header("location:settings.php");
}


 ?>