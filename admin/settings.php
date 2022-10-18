<!DOCTYPE html>
<html lang="en">
<?php include 'includes/header.php' ?>
<?php include 'includes/session.php' ?>  
<div class="container"> 
	<?php include 'includes/alert.php'; ?>
			<h4 class="text-center pri">Admin Profile</h4>
			 <div class="set-profile bg-white text-center mx-5 px-5">
			 	<img src="images/profile.jpg">
			 	<div class="my-3 pb-5">
			 		<div class="row">
			 			<div class="col-sm-12 col-md-6">
			 				<h5 class="pri">Profile</h5>
			 	 			<div class="mst">
			 	 				<p class="fw-bold my-3"><span class="active"></span>Status: Active</p>
				 	 				<div class="row">
				 	 					<div class="col-6">
				 	 						<h6>Username:</h6>
				 	 					</div>
				 	 					<div class="col-6">
				 	 						<p>Administrator</p>
				 	 					</div>
				 	 					<div class="col-6">
				 	 						<h6>Password:</h6>
				 	 					</div>
				 	 					<div class="col-6">
				 	 						<p>Beris martin</p>
				 	 					</div>
				 	 				</div>
				 	 				<button type="button" data-toggle="modal" data-target="#ModalCenter" class="btn btn-success btn-md text-center my-3"><i class="fa fa-edit"> </i>Edit</button>
			 	 			</div>
			 			</div>
			 			<div class="col-sm-12 col-md-6">
			 				<div class="text-center put-sec">
			 					<form method="post" action="setdata.php">
			 						<label for="school" class="pri">confirm:</label>
			 						<input type="Password" name="test" required>

			 						<label for="school" class="pri">High school name:</label>
			 						<input type="text" name="school">

			 						<label for="comm" class="pri mt-3">A comment to the students:</label>
			 						<input type="text" name="comm">

			 						<button  name="sub" value="sub" class="btn btn-md btn-success mt-3"><i class="fa fa-check"></i> submit</button>
			 					</form>
			 				</div>
			 			</div>
			 		</div> 
			 	</div>
		 </div>
</div>

<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title pri text-center"> update</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body text-center">
				<form method="post" action="admin.php"> 
				<label for="school" class="pri">confirm:</label>
			 	<input type="Password" name="test" required>
				<h6>Username: <input type="text" name="user"></h6>
			 	<h6>Password: <input type="text" name="pass"></h6>
			 	<button class="btn btn-ms btn-outline-success" name="updatepass" value="updatepass"><i class="fa fa-update"></i>update</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
				<button type="button" class="btn btn-primary">save changes</button>
			</div>
		</div>
	</div>
</div>

<?php include 'includes/footer.php' ?>
</html>
