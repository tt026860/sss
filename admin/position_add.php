<?php 
include 'includes/conn.php';

if(isset($_POST['add_position'])){

	$position = strtolower(mysqli_real_escape_string($conn, $_POST['position']));
	$order = strtolower(mysqli_real_escape_string($conn, $_POST['priority']));

	$ssql = "SELECT priority ,position FROM positions WHERE priority = '$order' OR position = '$position'";
		
		$check = mysqli_query($conn, $ssql);

		if(mysqli_num_rows($check) >0){
			$_SESSION['msg'] = "Failed to insert! <br> position ' ".$position." ' or order ' ".$order." ' already exists !";
			$_SESSION['msg-typ'] = "danger";
		}else{

	$sql = "INSERT INTO positions (position, priority) VALUES ('$position', '$order')";
	$query = mysqli_query($conn, $sql);

	if($query){

		$_SESSION['msg'] = "Position has been added successfully!";
		$_SESSION['msg-typ'] = "success";
	}
}
 header("location:positions.php");
}


 ?>