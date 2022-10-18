<?php 

	$cand = $candidate['cand_id'];
	$pos = $candidate['position'];
    $sql = "SELECT * FROM counts WHERE cand_id = '$cand'";
    $query = mysqli_query($conn, $sql);
    $votes = mysqli_fetch_all($query);
    $vote = count($votes);   
     

    $testsql = "UPDATE candidates SET result = '$vote' WHERE cand_id = '$cand'";
    $testquery = mysqli_query($conn,$testsql);
 ?>