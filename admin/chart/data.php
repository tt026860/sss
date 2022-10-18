<?php include '../includes/conn.php'; 
$sql = "SELECT firstname, result FROM candidates";
$result = mysqli_query($conn, $sql);

$data = array();
foreach($result as $row){
	$data[] = $row;
}

print json_encode($data);

?>