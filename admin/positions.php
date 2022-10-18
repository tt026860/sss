<?php include 'includes/header.php' ?>
<?php include 'includes/session.php' ?>  
<?php include 'position_select.php' ?>
 
 	<div class="container p-2">
 		<div class="container d-flex flex-row justify-content-between">
 			<h4 class="pri">Positions List</h4>
			<span class="pri"><i class="fa fa-home me-3"></i> home></i> Positions</span>
 		</div>
 	</div>
 	<?php include 'includes/alert.php'; ?>
<div class="container  py-2">
	<div class=" p-3 d-flex flex-row bg-white justify-content-between">
		<div class="add">
			<a  data-toggle="modal" href="#positionadd" class="btn-sm bg-success"><i class="fa fa-user-plus"> </i>Add</a>
		</div>
		<div>
			<p>total: <?php echo mysqli_num_rows($result); ?></p>
		</div>
		<div class="search">
			<i class="fa fa-search"></i>
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
		</div>
		<?php if(mysqli_num_rows($result)<5): ?>
			<div class="del">
			<a class="btn btn-outline-danger btn-sm disabled" data-toggle="modal" href="#positionreset"><i class="fa fa-recycle"></i> reset</a>
		</div>
			<?php else: ?>
			<div class="del">
			<a class="btn btn-outline-danger btn-sm" data-toggle="modal" href="#positionreset"><i class="fa fa-recycle"></i> reset</a>
		</div>
			<?php endif; ?>
	</div>
<div class="px-3 d-flex flex-row justify-content-between table-head bg-white ">
	<h6>Positions</h6>
	<h6>Order</h6>
	<h6>Tools</h6>
</div>
<ul id="myUL" class="list px-3 bg-white ">
 <?php
 if(mysqli_num_rows($result)>0){
 $i = 1; 
  	while($position = mysqli_fetch_array($result)):
  ?>
	 <li class="mb-3 table">
	 			
	 	  		<div><p><?php echo $position['position']; ?></p></div>
	 	  		<div><p><?php echo $position['priority']; ?></p></div>
	 	  		<div>
	 	  			<i class="fa fa-pencil pri"></i>
	 	  			<i class="fa fa-edit text-success edit"></i>
	 	  			<a href="position_delete.php?delete=<?php echo $position['position'] ?>"><i class="fa fa-trash text-danger"></i></a>
	 	  		</div>
	 	  		<div class="eye"><p><?php echo $position['id']; ?></p></div>
	  </li> 
<?php $i++; endwhile; ?>
<?php }else{ ?>
		<li><div class="p-3 text-center">No positions present!</div></li>
<?php } ?>
</ul>

</div>


<?php include 'includes/posmodals.php'; ?>
<?php include 'includes/footer.php'; ?>
 
  <script type="text/javascript">
	$(document).ready(function(){
		$('.edit').on('click', function(){

			$('#positionedit').modal('show');

			$tr = $(this).closest('li');

			var data = $tr.children('div').map(function(){
				return $(this).text();
			}).get();

			console.log(data);

			$('#id').val(data[3]);
			$('#position').val(data[0]);
			$('#priority').val(data[1]);
		});
	});
	   
</script>
 