<?php include 'inc/header.php'; ?> 
<?php include 'pos_select.php'; ?>
<?php include 'inc/session.php'; ?>
<?php include 'title.php'; ?> 

	  
	<div class="container">
		<div class="text-center justify-content-center mt-3 p-2">
			<h3 class="school"><?php echo $title; ?></h3>
		</div>
	</div>
	<?php  if(isset($_SESSION['msg'])) :?>
			<div class="alert alert-<?=$_SESSION['msg-typ']?> alert-dismissible fade show" role="alert">
		  	<p class="lead"><?php echo $_SESSION['msg']; ?></p>
		  	<button type="button" class="close" data-dismiss="alert" aria-label="close"><span arai-hidden="true">&times</span></button>

	  </div>
	<?php 
	unset($_SESSION['msg']);
	endif; ?>
		<?php 
		if($voter['status'] == "voted"){
	 ?>
	 		<div >
	 			<h3 style="color: red;">you have already voted!</h3>
	 		</div>
	<?php }else{ ?>
	<div class="all mt-5">
		<form method="POST" action="ballot_submit.php">
			<?php foreach($positions as $position): ?>
				<div class="container my-5 content" id="<?php echo $position['position'] ?>">
					<h4 class="text-center pri bg-white p-2"><?php echo $position['position']; ?></h4>
					<?php include 'cand_select.php'; ?>
					<div class="row">
						<?php while($candidate = mysqli_fetch_array($query)): ?>
							<div class="col-ms-12 col-md-6">
								<div class="wrap">
									<input type="radio" class="radiotab" no="<?php echo $position['position']; ?>" name="<?php echo $candidate['position']; ?>" value="<?php echo $candidate['cand_id']; ?>" id="<?php echo $candidate['cand_id'] ?>">

							 			<label for="<?php echo $candidate['cand_id']; ?>" >
							 						<div class="top"><i class="fa fa-check-square-o text-success"></i></div>
										 			<div class="v-body">
										 				<div>
										 					<?php if($candidate['image'] == ""): ?>
							 						<img src="admin/uploads/default/default.png">
							 						<?php else: ?>
							 						<img src="admin/uploads/<?php echo $candidate['image']; ?>">
							 						<?php endif; ?>
										 				</div>

										 				<div class="st">
				 											<p >Name: <b> <?php echo strtoupper( $candidate['lastname'] . " ". $candidate['firstname']); ?></b></p>
				 											<p >Class: <?php echo $candidate['class']; ?></p>
				 											<p >Stream: <?php echo $candidate['stream']; ?></p><p >Comment: <?php echo $candidate['comment']; ?></p> 				 										</div>
										 			</div> 
				 								<!-- <span >VOTE</span>  -->
							 				 
							 			</label>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endforeach; ?>
			<div class="text-center">
				<button name="submited" type="submit" class="ms-auto btn btn-lg btn-success end"><i class="fa fa-check"></i> submit</button>
			</div>
		</form>
	</div>
	<?php include 'inc/footer.php'; ?>
<?php } ?>


 <!-- <script type="text/javascript">
	$(document).ready(function(){
		  $('.radiotab').click(function(){
		  	let idd = $(this).attr('no');
 
		  	$('.'+9).css({ "backgroundColor": "red"});
		   
		  });
	});
</script>  -->