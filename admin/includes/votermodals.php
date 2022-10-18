<!--voter add modal-->
<div class="modal fade" id="voteradd" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title pri text-center">New Voter</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div> 
			<form action="voter_add.php" method="POST" enctype="multipart/form-data">

				<div class="modal-body text-center">
				<h6>Voter's Id: <input type="text" name="voter_id" required></h6>
				<h6>Firstname: <input type="text" name="firstname" required></h6>
			 	<h6>Lastname: <input type="text" name="lastname" required></h6>
			 	<h6>Username: <input type="text" name="username" required></h6>
			 	<h6>password: <input type="text" name="password" required></h6>
			 	<h6>photo: <input type="file" name="image" value="Image"></h6>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary mr-auto" data-dismiss="modal">close</button>
				<button name="add_voter" value="add_voter" class="btn btn-outline-success"><i class="fa fa-save"></i> Save</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- edit voter modal --> 
<div class="modal fade" id="voteredit" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<h5 class="modal-title pri text-center">Edit Voter</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="voter_update.php" method="POST" enctype="multipart/form-data">

				<div class="modal-body text-center">
				<h6>Voter's Id: <input type="text" name="voter_id" id="id"  disabled></h6>
				<h6>Firstname: <input type="text" name="firstname" id="first_name" required></h6>
			 	<h6>Lastname: <input type="text" name="lastname" id="last_name" required></h6>
			 	<h6>Username: <input type="text" name="username" id="user_name" required></h6>
			 	<h6>password: <input type="password" name="password" id="pass" required></h6> 
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary mr-auto" data-dismiss="modal">close</button>
				<button name="edit_voter" value="edit_voter" class="btn btn-outline-success"><i class="fa fa-save"></i> update</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- voter view profile -->
 <div class="modal fade" id="votermodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title pri text-center">Voter Profile</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div>
			 
			 <div class="modal-body" id="voter_detail">
			 	
			 </div> 
		</div>
	</div>
</div>


<!-- photo view -->
 <div class="modal fade pics " id="voterimg" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  " role="document">
		<div class="modal-content">
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
			</div>
			 <div class="modal-body" id="voter_img">
			 	<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			 </div> 
		</div>
	</div>
</div>

<!--voter reset modal --> 
<div class="modal fade" id="voterreset" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="pri">cofirmation</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="voter_reset.php" method="POST">
				<h5 class="modal-title  text-center p-3 py-5">Are you sure you want to delete all records!</h5>
				<div class="text-center">
				<h6>password: <input type="password" name="pass" placeholder="Insert admin password"></h6> 
				</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary mr-auto" data-dismiss="modal">close</button>
				<button name="del" value="del" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Delete</button>
			</div>
			</form>
		</div>
	</div>
</div>