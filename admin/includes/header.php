 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <meta http-equiv="refresh" content="60; logout.php"> -->
    <title>vote system</title>
    <link href="assets/bootstrap-4.0.0/dist/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <link rel="stylesheet" type="text/css" href="style/dashboard.css">
    <link rel="stylesheet" type="text/css" href="style/setting.css">
    <link rel="stylesheet" type="text/css" href="style/most.css">
    <link rel="stylesheet" type="text/css" href="style/cand.css">
    <link rel="stylesheet" type="text/css" href="style/modalc.css">
  </head>
 
  <body>
    <input type="checkbox" id="nav-check">
<nav class="navbar navfill mb-5">
  <div class="container">
    <div class="first">
      <label for="nav-check"><i class="fa fa-bars"></i></label><span class="pri">Dashboard</span>
    </div>
    <div class="d-flex flex-row">
      <div class="profile">
        <img src="images/profile.jpg">
        <div class="dropdown">
          <h6>Beris martin</h6>
        <p>Admin</p>
        </div>
      </div>
      <div>
          <a class="dropdown-toggle d-inline" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
           <div class="dropdown nav-drop">
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <img src="images/profile.jpg">
              <div class="operation d-flex flex-row justify-content-between">
                <a href="settings.php" class=" m-1 btn">settings</a>
                <a href="logout.php" class="m-1 btn">logout</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</nav>

    <div class="sidebar">
      <div class="sidebar-head">
        <i class="fa fa-car"></i><span>Administrator</span>
      </div>
      <div class="side-content">
        <ul class="mt-4">
          <li>
            <a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
          </li>
          <li>
            <a href="voters.php"><i class="fa fa-users"></i><span>Voters</span></a>
          </li>
          <li>
            <a href="candidates.php"><i class="fa fa-black-tie"></i><span>Candidates</span></a>
          </li>
          <li>
            <a href="positions.php"><i class="fa fa-lock"></i><span>Positions</span></a>
          </li>
          <li>
            <a href="settings.php"><i class="fa fa-cog"></i><span>Settings</span></a>
          </li>
           <li>
            <a href="print.php"><i class="fa fa-print"></i><span>Print</span></a>
          </li>
          <li>
            <a href="logout.php"><i class="fa fa-arrow-left"></i><span>Logout</span></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="whole">
<?php require_once 'conn.php'; ?>
