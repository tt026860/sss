
<?php 
	require_once 'includes/conn.php';
	if (isset($_POST['login'])) {
	 
	$username = mysqli_real_escape_string($conn, $_POST['username']);
 	$password = mysqli_real_escape_string($conn, $_POST['password']);
 		if(empty($username)){
 		header("location: login.php?error=Username is required");
 	}else if(empty($password)){
 		header("location: login.php?error=Password is required&username=$username");
 	}else{
 		$sql = "SELECT * FROM admin WHERE user = '$username'";
 		$query = mysqli_query($conn, $sql);

 		if(mysqli_num_rows($query)===1){
 			 $user = mysqli_fetch_assoc($query);
 			 $user_user = $user['user'];
 			 $user_pass = $user['pass'];
 			 $user_id = $user['id'];

 			 if($username === $user_user ){
 			 	if(password_verify($password, $user_pass)){
 			 		$_SESSION['user'] = $user_user;
 			 		$_SESSION['user_pass'] = $user_pass;
 			 		$_SESSION['idd'] = $user_id;
 			 		header("location: index.php");
 			 		
 			 	}else{
 			 		header("location: login.php?error=Incorrect Username or Password!&username=$username");
 			 	}
 			 }else{
 			 	header("location: login.php?error=Incorrect Username or Password!&username=$username");
 			 }
 		}else{
 			header("location: login.php?error=Incorrect Username or Password!&username=$username");
 		}
 	}
}  