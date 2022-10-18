 

 <?php  
require_once 'admin/includes/conn.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
	
	$username = $_POST['email'];
	$password = $_POST['password'];

	if (empty($username)) {
		header("Location: login.php?error=Username is required");
	}else if (empty($password)){
		header("Location: login.php?error=Password is required&email=$username");
	}else {
		$sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
		$result = mysqli_query($conn, $sql);
 		
		if(mysqli_num_rows($result)===1){
			$_SESSION['username'] = $username;
			$_SESSION['pass'] = $password;
			$_SESSION['msg'] = "Welcome " .$_SESSION['username'];
			$_SESSION['msg-typ'] = "success";
			header("location:index.php");
		} else{
			header("Location: login.php?error=Account not found!&email=$username");
		}
	}
}
