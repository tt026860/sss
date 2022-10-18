<?php 
 include 'includes/conn.php'; 
if(isset($_POST['sub'])){ 
	$id = mysqli_real_escape_string($conn, $_POST['test']);
	$school = mysqli_real_escape_string($conn, $_POST['school']);
	$comm = mysqli_real_escape_string($conn, $_POST['comm']);

	if(empty($comm)){
	$sql = "UPDATE admin  SET school = '$school', comm = '$comm' WHERE id='$id'";
	$query = mysqli_query($conn, $sql);

	if($query){
		$_SESSION['msg'] = "school name updated successfully!";
		$_SESSION['msg-typ'] = "success";
	} 
}elseif(empty($school)){
	$sql = "UPDATE admin  SET   comm = '$comm' WHERE id='$id'";
	$query = mysqli_query($conn, $sql);

	if($query){
		$_SESSION['msg'] = "school communications updated successfully!";
		$_SESSION['msg-typ'] = "success";
	} 
}
elseif(!empty($conn) && !empty($school)){
	$sql = "UPDATE admin  SET school = '$school', comm = '$comm' WHERE id='$id'";
	$query = mysqli_query($conn, $sql);

	if($query){
		$_SESSION['msg'] = "school name and communications updated successfully!";
		$_SESSION['msg-typ'] = "success";
	} 
}else{
		$_SESSION['msg'] = mysqli_error($conn);
		$_SESSION['msg-typ'] = "success";
}
 header("location:settings.php");
}


 ?>