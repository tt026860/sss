<?php 
include 'includes/conn.php';
 
if(isset($_POST['add_voter'])){
		$voter_id = strtoupper(mysqli_real_escape_string($conn, $_POST['voter_id']));
		$ssql = "SELECT voter_id FROM voters WHERE voter_id = '$voter_id'";
		
		$check = mysqli_query($conn, $ssql);
		if(mysqli_num_rows($check) >0){
			$_SESSION['msg'] = "Failed to insert! <br> voter id ' ".$voter_id." ' already exists !";
			$_SESSION['msg-typ'] = "danger";
		}else{

		$firstname = strtolower(mysqli_real_escape_string($conn, $_POST['firstname']));
		$lastname = strtolower(mysqli_real_escape_string($conn, $_POST['lastname']));
		$username = strtolower(mysqli_real_escape_string($conn, $_POST['username']));
		$password = strtolower(mysqli_real_escape_string($conn, $_POST['password']));
		$hashed = hash('sha512', $password);
		$rank = 0;
		$location=$_FILES["image"]["name"];
		move_uploaded_file($_FILES["image"]["tmp_name"],"voters/" . $_FILES["image"]["name"]);

		$sql = "INSERT INTO voters(voter_id, firstname, lastname, username, password, rank, photo) VALUES ('$voter_id', '$firstname', '$lastname', '$username', '$password' , '$rank', '$location')";

		 $result1 = mysqli_query($conn, $sql);

		if($result1){
			 $sql1 = "INSERT INTO users (voter_id, username, password, rank) VALUES ('$voter_id', '$username', '$password', '$rank')";

			  $result2 = mysqli_query($conn, $sql1);

		if($result2){

		$_SESSION['msg'] = "Voter has been added successfully!";
		$_SESSION['msg-typ'] = "success";
		
		
		}
	}

}
	header("location:voters.php");	
 
}

 ?>