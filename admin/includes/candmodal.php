<!--candidate add modal-->
<?php include 'cand_pos_select.php'; ?>
<div class="modal fade" id="candadd" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title pri text-center">New Candidate</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="candidate_add.php" method="POST" enctype="multipart/form-data">
				<div class="modal-body text-center">
			 	<h6>voter ID: <input type="text" name="voter_id" required></h6>
			 	<h6>Candidate ID: <input type="text" name="cand_id" required></h6>
				<h6>Firstname: <input type="text" name="firstname" required></h6>
			 	<h6>Lastname: <input type="text" name="lastname" required></h6>
			 	<h6>class: <input type="text" name="class" required></h6>
			 	<h6>Stream: <input type="text" name="stream" required></h6>
			 	<h6>username: <input type="text" name="username" required></h6>
			 	<h6>password: <input type="text" name="password" required></h6>
			 	<h6>Position: 
			 			<select name="position">
			 				<option selected>--select position--</option>
			 				<?php 
			 				$i = 1;
			 				while($position = mysqli_fetch_array($result)):
			 				 ?>
			 				 <option><?php echo $position['position']; ?></option>
			 				<?php endwhile; ?>
			 			</select>
			 	</h6>
			 	<h6>Gender: 
			 		<select name="gender">
			 			<option>male</option>
			 			<option>female</option>
			 		</select> 
			 	</h6>
			 	<h6>Comment: <input type="text" name="comment"></h6>
			 	<h6>photo: <input type="file" name="image"></h6>
			</div>
			
			<div class="modal-footer d-flex">
				<button type="button" class="btn btn-outline-secondary mr-auto" data-dismiss="modal">close</button>
				<button name="add_candidate" value="add_candidate" class="btn btn-outline-success"><i class="fa fa-save"></i> Save</button>
			</div>
			</form>
		</div>
	</div>
</div>


<!--candidate edit modal--> 
<?php include 'cand_pos_select.php'; ?>
<div class="modal fade" id="candedit" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title pri text-center">New Candidate</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="candidate_edit.php" method="POST" enctype="multipart/form-data">
				<div class="modal-body text-center">
			 	<h6>voter ID: <input type="text" name="voter_id" id="voter_id" disabled></h6>
			 	<h6>Candidate ID: <input type="text" name="cand_id" id="cand_id"></h6>
				<h6>Firstname: <input type="text" name="firstname" id="first_name"></h6>
			 	<h6>Lastname: <input type="text" name="lastname" id="last_name"></h6>
			 	<h6>class: <input type="text" name="class" id="class"></h6> 
			 	<h6>Stream: <input type="text" name="stream" id="stream"></h6> 
			 	<h6>Position: 
			 			<select name="position" id="position">
			 				<option selected>--select position--</option>
			 				<?php 
			 				$i = 1;
			 				while($position = mysqli_fetch_array($result)):
			 				 ?>
			 				 <option><?php echo $position['position']; ?></option>
			 				<?php endwhile; ?>
			 			</select>
			 	</h6>
			 	<h6>Comment: <input type="text" name="comment" id="comment"></h6>
			</div>
			
			<div class="modal-footer d-flex">
				<button type="button" class="btn btn-outline-secondary mr-auto" data-dismiss="modal">close</button>
				<button name="edit_candidate" value="edit_candidate" class="btn btn-outline-success"><i class="fa fa-save"></i> Edit</button>
			</div>
			</form>
		</div>
	</div>
</div>
 
<!-- candidate comment -->
 <div class="modal fade" id="canmodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title pri text-center">Candidate communication</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div>
			 
			 <div class="modal-body" id="candidatemodal">
			 	
			 </div> 
		</div>
	</div>
</div>




<!-- candidate view profile -->
 <div class="modal fade" id="candmodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title pri text-center">Candidate Profile</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div>
			 
			 <div class="modal-body" id="candidate_detail">
			 	
			 </div> 
		</div>
	</div>
</div>