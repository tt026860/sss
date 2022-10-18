<!--position add modal-->
<div class="modal fade" id="positionadd" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title pri text-center">New Candidate</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="position_add.php" method="POST">
				<div class="modal-body text-center">
				<h6>Position: <input type="text" name="position"></h6>
			 	<h6>Order: <input type="text" name="priority"></h6>
			</div>
			
			<div class="modal-footer d-flex">
				<button type="button" class="btn btn-outline-secondary mr-auto" data-dismiss="modal">close</button>
				<button name="add_position" name="add_position" class="btn btn-outline-success"><i class="fa fa-save"></i>Save</button>
			</div>
			</form>
		</div>
	</div>
</div>


<!--position edit modal-->
<div class="modal fade" id="positionedit" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title pri text-center">New Candidate</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="position_edit.php" method="POST">
				<div class="modal-body text-center">
					<input type="hidden" name="id" id="id">
				<h6>Position: <input type="text" name="position" id="position"></h6>
			 	<h6>Order: <input type="text" name="priority" id="priority"></h6>
			</div>
			
			<div class="modal-footer d-flex">
				<button type="button" class="btn btn-outline-secondary mr-auto" data-dismiss="modal">close</button>
				<button name="edit_position" name="edit_position" class="btn btn-outline-success"><i class="fa fa-save"></i> Update</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!--positions reset modal --> 
<div class="modal fade" id="positionreset" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="pri">cofirmation</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="position_reset.php" method="POST">
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