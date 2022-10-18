<?php include 'includes/header.php' ?>
<?php include 'includes/session.php' ?>  
<?php include 'candidate_select.php' ?>
 <?php include 'position_select.php' ?>

 	<div class="container p-2">
 		<div class="container d-flex flex-row justify-content-between">
 			<h4 class="pri">Candidates List</h4>
			<span class="pri"><i class="fa fa-home me-3"></i> home></i> Candidates</span>
 		</div>
 	</div>
 	<?php include 'includes/alert.php'; ?>
<div class="container  py-2">
	<div class=" p-3 d-flex flex-row bg-white justify-content-between">
		<?php if(mysqli_num_rows($result)==0): ?>
			<p><a href="positions.php">First insert Positions</a></p>
			<?php else: ?>
				<div class="add">
					<a  data-toggle="modal" href="#candadd" class="btn-sm bg-success"><i class="fa fa-user-plus"> </i>Add</a>
				</div>
			<?php endif; ?>
		<div>
			<p>total: <?php echo mysqli_num_rows($resultcands); ?></p>
		</div>
		<div class="search">
			<i class="fa fa-search"></i>
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
		</div>
	</div>
<div class="px-3 d-flex flex-row justify-content-between table-head bg-white ">
	
	<h6>Firstname</h6>
	<h6>Lastname</h6>
	<h6>Image</h6>
	<h6>Position</h6>
	<h6>class</h6>
	<h6>Comment</h6>
	<h6>Tools</h6>
</div>
<ul id="myUL" class="list px-3 bg-white ">
	<?php if(mysqli_num_rows($resultcands)>0): ?>
 <?php 	
 	$i = 1;
 	while($candidate = mysqli_fetch_array($resultcands)):

  ?>
   <li class="mb-3 table">
  			<div class="mt-auto"><p><?php echo $candidate['firstname']; ?></p></div>
 	  		<div><p><?php echo $candidate['lastname']; ?></p></div>
 	  		<div class="pro-img">
 	  			<?php if($candidate['image'] != ""): ?>
									<img src="uploads/<?php echo $candidate['image']; ?>">
									<?php else: ?>
									<img src="uploads/default/default.png">
									<?php endif; ?></div>
 	  		<div><p><?php echo $candidate['position']; ?></p></div>
 	  		<div><p><?php echo $candidate['class']; ?></p></div>
 	  		<div> <a data-id="<?php echo $candidate['cand_id']; ?>" class="comment"><i class="fa fa-search"></i></a></div>
 	  		<div>
 	  			<a class="platform" data-id="<?php echo $candidate['cand_id']; ?>"><i class="fa fa-pencil pri"></i></a>
 	  			
 	  			<i class="fa fa-edit text-success edit"></i>
 	  			<a href="candidate_delete.php?delete=<?php echo $candidate['voter_id']; ?>">
 	  				<i class="fa fa-trash text-danger"></i>
 	  			</a>
 	  			
 	  		</div>
 	  		<div class="eye"><?php echo $candidate['voter_id']; ?></div>
 	  		<div class="eye"><?php echo $candidate['cand_id']; ?></div>
 	  		<div class="eye"><?php echo $candidate['comment']; ?></div> 
 	  		<div class="eye"><?php echo $candidate['class']; ?></div> 
 	  		<div class="eye"><?php echo $candidate['stream']; ?></div> 
  </li> 
 

  <?php $i++; endwhile; ?>
 
  <?php else: ?>
  	<li><div class="p-3 text-center">No candidates present !</div></li>
  <?php endif; ?>
</ul>

</div>


<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<?php include 'includes/footer.php'; ?>

 <?php include 'includes/candmodal.php'; ?>
 
<script type="text/javascript">
	$(document).ready(function(){
		$('.comment').click(function(){
 		var userid = $(this).data('id');
 		$.ajax({
 			url: 'candidate_comm.php',
 			type: 'post',
 			data: {userid: userid},
 			success: function(response){
 				$('#candidatemodal').html(response);
 				$('#canmodal').modal('show');
 			}
 		});
 	});

	$('.platform').click(function(){
 		var userid = $(this).data('id');
 		$.ajax({
 			url: 'candidate_view.php',
 			type: 'post',
 			data: {userid:userid},
 			success: function(response){
 				$('#candidate_detail').html(response);
 				$('#candmodal').modal('show');
 			}
 		});
 	});

	$('.edit').on('click', function(){

			$('#candedit').modal('show');

			$tr = $(this).closest('li');

			var data = $tr.children('div').map(function(){
				return $(this).text();
			}).get();

			console.log(data);

			$('#voter_id').val(data[7]);
			$('#cand_id').val(data[8]);
			$('#first_name').val(data[0]);
			$('#last_name').val(data[1]); 
			$('#class').val(data[4]); 
			$('#position').val(data[3]); 
			$('#comment').val(data[9]); 
			$('#class').val(data[10]); 
			$('#stream').val(data[11]); 
			
		});


});
</script>

