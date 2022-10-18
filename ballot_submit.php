<?php 
 	include 'admin/includes/conn.php';
	 include 'voter_sel.php'; 
	 
	if($voter['rank'] === 1 ){
 				$rr = 1;
 			}else{
 				$rr = 0;
 			}
 	if(isset($_POST['submited'])){
 		if(empty($_SESSION['id'])){
 			header("location: logout.php");
 		}else{
 		$voter = $_SESSION['id']; 

 		$sql1 = "SELECT voter_id FROM counts WHERE voter_id = '$voter'";
 		$query1 = mysqli_query($conn, $sql1);
 		$count = mysqli_fetch_all($query1, MYSQLI_ASSOC);
 		if(!empty($count)){
			header("location: logout.php");
 		}else{

 			$sql2 = "SELECT * FROM positions";
 			$query2 = mysqli_query($conn, $sql2);
 			$num = mysqli_num_rows($query2);
 			$tt = $num+1;	

 			if(count($_POST) === $tt){
				foreach ($_POST as $key => $value) {
					 $sql = "INSERT INtO counts (voter_id, cand_id, position, rank) VALUES( '$voter','$value', '$key', '$rr')";
 					$query = mysqli_query($conn, $sql);

 					if($query){
 					$status = 'voted';
 					$sql3 = "UPDATE voters SET status = '$status' WHERE voter_id = '$voter'";
 					$query3 = mysqli_query($conn, $sql3);
 					if($query3){
 						header("location:done.php");
 					}else{
 					$_SESSION['msg'] =  mysqli_error($conn);
 					$_SESSION['msg-typ'] = 'warning';
 					header("location: index.php");
 					}
 				}else{
 					$_SESSION['msg'] =  mysqli_error($conn);
 					$_SESSION['msg-typ'] = 'warning';
 					header("location: index.php");
 				}
				}
 				
			}else{
				$error = count($_POST) - 1;
				header("location:index.php");
	 			$_SESSION['msg'] = "vote for more than ". $error." candidate";
	 			$_SESSION['msg-typ'] = "danger";
			}
 		}
 	}
 }
 ?>

