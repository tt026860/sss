<?php 
  session_start();
  if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email'])) { 
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>	login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    	<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.0.0/dist/css/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="style/login.css">
        <link rel="stylesheet" type="text/css" href="../style/demo.css" />
        <link rel="stylesheet" type="text/css" href="../style/ss.css" />
		
    </head>
<body style="overflow: hidden;">  
	       <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>BERIS</h3></div></li>
            <li><span>Image 02</span><div><h3>E-VOTING</h3></div></li>
            <li><span>Image 03</span><div><h3>SYSTEM</h3></div></li>
            <li><span>Image 04</span><div><h3>FOR BETTER</h3></div></li>
            <li><span>Image 05</span><div><h3>AND FAIR</h3></div></li>
            <li><span>Image 06</span><div><h3>ELECTIONS.</h3></div></li>
        </ul>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
   
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
 	
                <h1>ADMIN PAGE</h1>
				<p class="codrops-demos">
					<a href="#">Designed by Beris martin</a>
				</p>
            </header>
            <div class="d-flex justify-content-center  sty text-center" style="min-height: 100vh;">
	  	<form class="p-5 rounded shadow" action="auth.php" method="post" style="width: 30rem">
	  		<h1 class="text-center pb-5 display-4">LOGIN</h1>
	  		<?php if (isset($_GET['error'])) { ?>
	  		<div class="alert alert-danger" role="alert">
			  <?=htmlspecialchars($_GET['error'])?>
			</div>
		    <?php } ?>
		  <div class="mb-3 input">
		  	<i class="fa fa-user"></i>
		    <input type="text"  name="email"  value="<?php if(isset($_GET['email']))echo(htmlspecialchars($_GET['email'])) ?>" class="form-control" placeholder="Enter Username">
		  </div>
		  <div class="mb-3 input">
		  	<i class="fa fa-key"></i>
		    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter Password">
		  </div>
		  <button type="submit" 
		          class="btn btn-primary">LOGIN
		  </button>
		</form>
	  </div>
         <script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="assets/bootstrap-4.0.0/dist/js/bootstrap.js"></script>
    </body>
    </html>
<!-- <body>
	  <div class="d-flex justify-content-center align-items-center sty text-center" style="min-height: 100vh;">
	  	<form class="p-5 rounded shadow" action="auth.php" method="post" style="width: 30rem">
	  		<h1 class="text-center pb-5 display-4">LOGIN</h1>
	  		<?php if (isset($_GET['error'])) { ?>
	  		<div class="alert alert-danger" role="alert">
			  <?=htmlspecialchars($_GET['error'])?>
			</div>
		    <?php } ?>
		  <div class="mb-3 input">
		  	<i class="fa fa-user"></i>
		    <input type="text"  name="email"  value="<?php if(isset($_GET['email']))echo(htmlspecialchars($_GET['email'])) ?>" class="form-control" placeholder="Enter Username">
		  </div>
		  <div class="mb-3 input">
		  	<i class="fa fa-key"></i>
		    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter Password">
		  </div>
		  <button type="submit" 
		          class="btn btn-primary">LOGIN
		  </button>
		</form>
	  </div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="assets/bootstrap-4.0.0/dist/js/bootstrap.js"></script>
</body> -->
</html>

<?php 
}else {
   header("Location: index.php");
}
 ?>



