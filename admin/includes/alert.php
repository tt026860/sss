
<?php 

 		if(isset($_SESSION['msg'])):
 	 ?>
 	 	<div class="alert alert-<?=$_SESSION['msg-typ']?> alert-dismissible fade show mx-3" role="alert">
			<?php
			 echo $_SESSION['msg'];
		   	unset($_SESSION['msg']);
			 ?>
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>	
 	<?php endif; ?>