<?php include 'includes/header.php' ?>
<?php include 'includes/session.php' ?>  
<?php include 'voter_select.php' ?>
 
 	<div class="container p-2">
 		<div class="container d-flex flex-row justify-content-between">
 			<h4 class="pri">Voters List</h4>
			<span class="pri"><i class="fa fa-home me-3"></i> home></i> Voters</span>
 		</div>
 	</div>
 	<?php include 'includes/alert.php'; ?>
          	
<div class="container  py-2">
	<div class=" p-3 d-flex flex-row bg-white justify-content-between">
		<div class="add">
			<a  data-toggle="modal" href="#voteradd" class="btn-sm bg-success"><i class="fa fa-user-plus"> </i>Add</a>
		</div>
		<div>
			<p>total: <?php echo mysqli_num_rows($voterslist); ?></p>
		</div>
		<div class="search">
			<i class="fa fa-search"></i>
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
		</div>
		<?php if(mysqli_num_rows($voterslist)<5): ?>
			<div class="del">
			<a class="btn btn-outline-danger btn-sm disabled" data-toggle="modal" href="#voterreset"><i class="fa fa-recycle"></i> reset</a>
		</div>
			<?php else: ?>
			<div class="del">
			<a class="btn btn-outline-danger btn-sm" data-toggle="modal" href="#voterreset"><i class="fa fa-recycle"></i> reset</a>
		</div>
			<?php endif; ?>
	</div>
<div class="px-3 d-flex flex-row justify-content-between table-head bg-white ">
	<h6>photo</h6>
	<h6>Firstname</h6>
	<h6>Lastname</h6>
	<h6>Username</h6>
	<h6>Status</h6>
	<h6>Tools</h6>
</div>
<ul id="myUL" class="list px-3 bg-white ">
	<?php if(mysqli_num_rows($voterslist)>0): ?>
		<?php 
			$i = 1;
			while($voter = mysqli_fetch_array($voterslist)): ?>
				<li class="mb-3 table">
			  	<div>
			  		<a class="view" data-id="<?php echo $voter['voter_id']; ?>">
						<?php if($voter['photo'] != ""): ?>
						<?php if($voter['rank']==1): ?>
							<img src="uploads/<?php echo $voter['photo']; ?>">
							<?php else: ?>
								<img src="voters/<?php echo $voter['photo']; ?>">
							<?php endif; ?>
						<?php else: ?>
						<img src="voters/default/default.png">
						<?php endif; ?>	  			
			  		</a>
				</div>

			 	  		<div><p><?php echo $voter['firstname']; ?></p></div>
			 	  		<div><p><?php echo  $voter['lastname']; ?></p></div>
			 	  		<div><p><?php echo $voter['username']; ?></p></div>
			 	  		<?php if($voter['status'] == 'voted'){ ?>
			 	  		<div><span class="green text-light fw-bolder px-3">voted</span></div>
			 	  	<?php }else{ ?>
			 	  		<div><span class="red text-light fw-bolder px-3">inactive</span></div>
			 	  	<?php } ?>
			 	  		<div>
			 	  			<a class="platform" data-id="<?php echo $voter['voter_id']; ?>"><i class="fa fa-pencil pri"></i></a>
			 	  			<i class="fa fa-edit text-success edit"></i>
			 	  			<a  href="voter_delete.php?delete=<?php echo $voter['voter_id']; ?>"><i class="fa fa-trash text-danger"></i></a>		 	  			
			 	  		</div>
			 	  		<div class="eye"><p><?php echo $voter['voter_id']; ?></p></div>
			 	  		<div class="eye"><?php echo $voter['password']; ?></div>
			 	  		<div class="eye"></div>
 
  				</li>
			<?php $i++; endwhile; ?>
			<?php else: ?>
				<li><div class="p-3 text-center">No voters present !</div></li>
	<?php endif; ?>
   
   
  
</ul>

</div>


<?php include 'includes/votermodals.php'; ?>
<?php include 'includes/footer.php'; ?>

 <script type="text/javascript">
	$(document).ready(function(){
		$('.edit').on('click', function(){

			$('#voteredit').modal('show');

			$tr = $(this).closest('li');

			var data = $tr.children('div').map(function(){
				return $(this).text();
			}).get();

			console.log(data);

			$('#id').val(data[6]);
			$('#first_name').val(data[1]);
			$('#last_name').val(data[2]);
			$('#user_name').val(data[3]);
			$('#pass').val(data[7]);
			
		});

		$('.platform').click(function(){
 		var userid = $(this).data('id');
 		$.ajax({
 			url: 'voter_view.php',
 			type: 'post',
 			data: {userid:userid},
 			success: function(response){
 				$('#voter_detail').html(response);
 				$('#votermodal').modal('show');
 			}
 		});
 	});

$('.view').click(function(){
 		var user = $(this).data('id');
 		$.ajax({
 			url: 'voter_img.php',
 			type: 'post',
 			data: {user:user},
 			success: function(response){
 				$('#voter_img').html(response);
 				$('#voterimg').modal('show');
 			}
 		});
 	});

	});
	   
</script>
 