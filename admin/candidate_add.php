<?php 
	 include 'includes/conn.php'; 

	if(isset($_POST['add_candidate'])){
		$voter_id = strtoupper(mysqli_real_escape_string($conn, $_POST['voter_id']));
		$ssql = "SELECT voter_id FROM voters WHERE voter_id = '$voter_id'";
		
		$check = mysqli_query($conn, $ssql);
		if(mysqli_num_rows($check) >0){
			$_SESSION['msg'] = "Failed to insert! <br> voter id ' ".$voter_id." ' already exists !";
			$_SESSION['msg-typ'] = "danger";
		}else{
		$candidate_id = strtolower(mysqli_real_escape_string($conn, $_POST['cand_id']));

		$sc2 = "SELECT cand_id FROM candidates WHERE cand_id = '$candidate_id'";
		
		$check2 = mysqli_query($conn, $sc2);
		if(mysqli_num_rows($check2) >0){
			$_SESSION['msg'] = "Failed to insert! <br> candiidate ID ' ".$candidate_id." ' already exists !";
			$_SESSION['msg-typ'] = "danger";
		}else{
		$firstname = strtolower(mysqli_real_escape_string($conn, $_POST['firstname']));
		$lastname = strtolower(mysqli_real_escape_string($conn, $_POST['lastname']));
		$username = strtolower(mysqli_real_escape_string($conn, $_POST['username']));
		$class = strtolower(mysqli_real_escape_string($conn, $_POST['class']));
		$stream = strtolower(mysqli_real_escape_string($conn, $_POST['stream']));
		$password = strtolower(mysqli_real_escape_string($conn, $_POST['password']));
		$post = strtolower(mysqli_real_escape_string($conn,  $_POST['position']));
		if($post == '--select position--'){
			$_SESSION['msg'] = "Failed to insert! <br> failed to select position !";
			$_SESSION['msg-typ'] = "danger";
		}else{
		$rank = 1;
		$gender = strtolower(mysqli_real_escape_string($conn, $_POST['gender']));
		$location=$_FILES["image"]["name"];
		move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);
		if(empty($_POST['comment'])){
			$comment = 'Nothing to say';
		}else{
			$comment = strtolower(mysqli_real_escape_string($conn, $_POST['comment']));
		}

		$sql = "INSERT INTO candidates(voter_id, cand_id, firstname, lastname, class, stream, comment ,position, rank, image) VALUES ('$voter_id','$candidate_id', '$firstname', '$lastname', '$class', '$stream' ,'$comment', '$post', '$rank',  '$location')";

		$result2 = mysqli_query($conn, $sql);

				if($result2){
					$query = "INSERT INTO users(voter_id, username, password, rank) VALUES ('$voter_id','$username','$password', '$rank')";
			 $result = mysqli_query($conn, $query);

			 	$loc=$_FILES["image"]["name"];
					move_uploaded_file($_FILES["image"]["tmp_name"],"voters/" . $_FILES["image"]["name"]);

				 $quer3 = "INSERT INTO voters(voter_id, firstname, lastname, username, password, rank, photo) VALUES( '$voter_id', '$firstname', '$lastname', '$username', '$password', '$rank','$loc')";
				 $sql3 = mysqli_query($conn, $quer3);
				
						if($result){
						$_SESSION['msg'] = "Candidate has been added successfully!";
						$_SESSION['msg-typ'] = "success";
					}
					
				}else{
					$_SESSION['msg'] =  mysqli_error($conn);
						$_SESSION['msg-typ'] = "danger";
				}
			}
		}
	}
		 header("location:candidates.php");				 
}
?>