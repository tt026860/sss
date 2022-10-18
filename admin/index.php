<!DOCTYPE html>
<html lang="en">
<?php include 'includes/header.php' ?>
<?php include 'includes/session.php' ?>  
<?php include 'v_count.php' ?>
<?php include 'p_count.php' ?>
<?php include 'c_count.php' ?>
<?php include 'vf_count.php' ?>
<?php include 'position_select.php' ?>

 <div class="container-fluid">
  <?php include 'includes/alert.php'; ?>
   <div class="row">
     <div class="col-sm-12 col-md-6 col-lg-3">
       <div class="card">
          <div class="row">
            <div class="col-4">
              <a href="voters.php"><i class="fa fa-tasks"></i></a>
            </div>
            <div class="col-6 text-center">
              <h3><?php echo count($voters); ?></h3>
              <p>Voters</p>
            </div>
          </div>
       </div>
     </div>
     <div class="col-sm-12 col-md-6 col-lg-3">
       <div class="card">
          <div class="row">
            <div class="col-4">
              <a href="positions"><i class="fa fa-black-tie"></i></a>
            </div>
            <div class="col-6 text-center">
              <h3><?php echo count($positions); ?></h3>
              <p>Positions</p>
            </div>
          </div>
       </div>
     </div>
     <div class="col-sm-12 col-md-6 col-lg-3">
       <div class="card">
          <div class="row">
            <div class="col-4">
              <a href="candidates.php"><i class="fa fa-users"></i></a>
            </div>
            <div class="col-6 text-center">
              <h3><?php echo count($candidates); ?></h3>
              <p>Candidates</p>
            </div>
          </div>
       </div>
     </div>
     <div class="col-sm-12 col-md-6 col-lg-3">
       <div class="card">
          <div class="row">
            <div class="col-4">
              <a href="#"><i class="fa fa-edit"></i></a>
            </div>
            <div class="col-6 text-center">
              <h3><?php echo count ($result1); ?></h3>
              <p>Voted</p>
            </div>
          </div>
       </div>
     </div>
   </div>

 <!-- graph section -->
 <div class="container all-round mt-4">
      <div class="row">
        <div class="col-9">
          <div class="row">
            <div class="col-sm-12 col-md-7 text-center">
              <div class="content-chart px-3">
              <?php if(mysqli_num_rows($result)>0): ?>
               <?php include 'graph1.php'; ?> 
                   <h5><?php echo $first;?></h5>
                    <canvas id="myChart" height="140" width="200"></canvas> 
                    <?php else: ?>
                      <p class="lead mt-5 text-center"> No data to be fetched from Databaes Positions should first be added</p>
                    <?php endif; ?>    
              </div>
            </div>
            <div class="col-sm-12 col-md-5">
              <div class="content-slab text-center py-2">
                <h6><i class="fa fa-trophy"></i>1<span>st</span></h6>
                <?php include 'tally.php'; ?>
                  <div class="my-3"> 
                    <p class="lead"><?php echo $first;?></p>
                    <h6><?php echo strtoupper($last); ?></h6>
                  </div>
              </div>
              <div class="container-fluid mt-3 p-0 d-md-flex flex-row text-center justify-content-between">
                <div class="bg-white px-2  content-float">
                  <?php if(mysqli_num_rows($result)> 1): ?>
                    <h6><i class="fa fa-trophy"></i>1 <span>st</span></h6>
                  <?php include 'tall2.php'; ?>
                  <div class="my-3">
                    <p class="lead"><?php echo $res;?></p>
                    <h6><?php echo strtoupper($last); ?></h6>
                  </div>
                  <?php else: ?>
                    <div class="pt-1">
                      <p>No of positions should be grater than "2"</p>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="bg-white px-2  content-float">
                  <?php if(mysqli_num_rows($result)>2): ?>
                      <h6><i class="fa fa-trophy"></i>1<span>st</span></h6>
                      <?php include 'tall3.php'; ?>
                    <div class="my-3">
                        <p class="lead"><?php echo $res;?></p>
                        <h6><?php echo strtoupper($last); ?></h6>
                    </div>
                    <?php else: ?>
                      <div>
                        <p>No of positions should be grater than "3"</p>
                      </div>
                    <?php endif; ?>
                </div>
              </div>
                <div class="search mt-4">
                  <i class="fa fa-search"></i>
                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                </div>
            </div>
          </div>
        </div>
        <div class="col-3 content-slide">
          <ul id="myUL">
           <!--   -->
             <?php include 'result.php'; ?>
             <?php foreach($positions as $position): ?>
              <li class="mb-3">
                <div class="content-card bg-light">
                  <p class="text-center"><?php echo $position['position']; ?></p>
                  <?php include 'res_sel.php'; ?>
                    <?php foreach($get as $candidate): ?>
                        <div class="others px-3">
                        <p><?php echo  $candidate['lastname']; ?></p>
                        <?php include 'res_count.php'; ?>
                        <p><?php echo $vote; ?></p>
                    </div>
                  <?php endforeach; ?>
            </div>
            </li>
             <?php endforeach; ?>
          </ul>
        </div>
      </div>
 </div>

 <div class="container mt-1 graph-section">
    <h4 class="text-center bg-white p-2 pri">Voting and Polling section</h4>
  <!-- <div class="row px-2 justify-content-between  ">
    <div class="col-sm-12 col-md-6 mt-3">
        <div class="bg-white">
          <h6 class="text-center">head boy</h6>
        <canvas id="others" ></canvas>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 mt-3 ">
      <div class="bg-white">
       <h6 class="text-center">head boy</h6>
        <canvas id="pri2" ></canvas>
      </div>
    </div>
  </div> -->
 </div>

<?php include 'includes/footer.php' ?> 
 <?php include 'data.php'; ?>  

 <!--  <script>window.jQuery || document.write('<script src="assets/bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="assets/bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>  -->
  
