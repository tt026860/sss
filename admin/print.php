<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>print results</title>
	<link href="assets/bootstrap-4.0.0/dist/css/bootstrap.css" rel="stylesheet">
	<?php include 'includes/conn.php'; ?>
	<?php include 'title.php'; ?>
	<?php include 'pos_select.php'; ?>
	<?php include 'invalid.php'; ?>
	<?php include 'vf_count.php'; ?>
	<style type="text/css">
		*{
			font-family: 'Berlin Sans FB';
		}
		.table{
			border: 1px solid black;
		}
		.others{
			display: flex;
			justify-content: space-between;
		}
		ul li{
			list-style: none;
			border: 1px solid black;
		}
		.others p{
			width: 50%;
			padding-left: 20px;
			padding-right: 60px;
			border-top: 1px solid black; 
		}
		.others p:last-child{
			text-align: end;
		}
 
	</style>
</head>
<body> 
	<div class="container"> 
		<div class="container p-5 text-center">
			<h3><?php echo $title; ?></h3>
			<h5>Election Results</h5>
		</div>

		<div class="container">

			<ul id="myUL">
           <!--   -->
             <?php include 'result.php'; ?>
             <div  class="d-flex table justify-content-between">
                <p class="px-5"><b>NAME</b></p>
                <p class="px-5"><b>RESULTS</b></p>
                    	</div>
             <?php foreach($positions as $position): ?>
              <li class="mb-5">
                <div class="content-card">
                  <p class="text-center mt-3"><b><?php echo strtoupper($position['position']); ?></b></p>
                  <?php include 'res_sel.php'; ?>
                    <?php foreach($get as $candidate): ?>
                        <div class="others">
                        <p><?php echo  strtoupper($candidate['firstname']). ' '.strtoupper($candidate['lastname']) ; ?></p>
                        <p><?php echo $candidate['result']; ?></p>
                    </div>
                  <?php endforeach; ?>
            </div>
            </li>
             <?php endforeach; ?>
          </ul>
			<div class="d-flex justify-content-between px-5">
				<div>
					<p>Number of invalid votes: <b><?php echo $num; ?></b></p>
				</div>
				<div>
					<p>Number of votes: <b><?php echo count($result1); ?></b></p>
				</div>
			</div>
		</div>
		<button onclick="window.print()" class="btn "><i class="fa fa-print"></i> Print</button>
	</div>
</body>
</html>
 