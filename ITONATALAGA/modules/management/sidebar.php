
<body>
    <!-- Side Navbar -->
    <?php $filename=basename($_SERVER['PHP_SELF']); ?>

    <nav class="side-navbar bg-sidebar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="../../img/diane.png" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">Kristine Mae Viloria</h2><span class="text-uppercase position">Management Personnel</span>
          </div>
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <img src="../../img/icon.png"></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li <?php if($filename=='index.php') { echo "class='active'"; } ?> >
              <a href="index.php"> <i class="fa fa-inbox"></i><span>Contracts</span></a>
            </li>                
            <li <?php if($filename=='proposal.php') { echo "class='active'"; } ?>>
              <a href="proposal.php"> <i class="fa fa-thumb-tack"></i><span>Proposals</span></a>
            </li>                 
            <li <?php if($filename=='request.php') { echo "class='active'"; } ?>>
              <a href="request.php"> <i class="fa fa-money"></i><span>Budget Request</span></a>
            </li>
            <li <?php if($filename=='payment.php') { echo "class='active'"; } ?>>
              <a href="payment.php"> <i class="fa fa-credit-card"></i><span>Engager Payment</span></a>
            </li>
            <li <?php if($filename=='history.php') { echo "class='active'"; } ?>>
              <a href="history.php"> <i class="fa fa-history"></i><span>History</span></a>
            </li>
            <li <?php if($filename=='employee.php') { echo "class='active'"; } ?>>
              <a href="employee.php"> <i class="fa fa-user"></i><span>Employees</span></a>
            </li>
            <li <?php if($filename=='activity.php') { echo "class='active'"; } ?>>
              <a href="activity.php"> <i class="fa fa-address-book-o"></i><span>Activity Log</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>