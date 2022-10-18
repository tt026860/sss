

<?php
session_start(); 
if(!isset($_SESSION['iddd'])){
		header('location: login.php');
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 

 <?php echo $_SESSION['id']; ?>
 </body>
 </html>
 