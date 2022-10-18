<?php require_once 'admin/includes/conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>voting</title> 
	 <link href="admin/assets/bootstrap-4.0.0/dist/css/bootstrap.css" rel="stylesheet">
   <link href="admin/assets/bootstrap-4.0.0/dist/js/bootstrap.js" rel="stylesheet">
    <link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/vv.css">
    <link rel="stylesheet" type="text/css" href="style/votes.css">
</head>
<body>
<?php include 'inc/comm.php' ?>
    <input type="checkbox" id="nav-check">
<nav class="navbar navfill mb-5">
  <div class="container">
    <div class="first">
      <label for="nav-check"><i class="fa fa-bars"></i></label><span class="pri">Voting system</span>
    </div>
    <div class="ms-auto">
      <a data-toggle="modal" href="#comm"><i class="fa fa-envelope pri mx-4"></i></a>
      <i class="fa fa-logout"><a href="logout.php">Logout</a></i>
    </div>
  </div>
</nav>
<?php include 'voter_sel.php'; ?>
<div class="sidebar">
		<div class="sidebar-head">
      <?php if($voter['photo'] == ""): ?>
       <img src="admin/uploads/default/default.png">
        <?php else: ?>
        <?php if($voter['rank']==1): ?>
          <img src="admin/uploads/<?php echo $voter['photo']; ?>">
          <?php else: ?>
            <img src="admin/voters/<?php echo $voter['photo']; ?>">
          <?php endif; ?>
       <?php endif; ?>
      <span class="ps-3  text-white">
        <p><?php echo $voter['firstname']; ?></p>
        <p><?php echo $voter['lastname']; ?></p>
      </span>
    </div>
    <div class="side-content">
        <ul class="mt-4">
          <?php include 'pos.php'; ?>
          <?php foreach($positions as $position): ?>
            <li class ="<?php echo $position['id']; ?>"><a href="#<?php echo $position['position']; ?>" ><span><?php echo $position['position']; ?></span></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
</div>
<div class="whole"> 
