<?php 	
	$conn = mysqli_connect('localhost', 'root', '', 'vote');

	if(!$conn){
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			No database Found!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">X</span></button>
        </div>  ';
	}
 session_start();
 
 ?>