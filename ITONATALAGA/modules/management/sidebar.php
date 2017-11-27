
<body>
    <!-- Side Navbar -->
    <?php $filename=basename($_SERVER['PHP_SELF']); ?>

    <nav class="side-navbar bg-sidebar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="../../img/kristine.png" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">Kristine Mae Viloria</h2><span class="text-uppercase position">Management Personnel</span>
          </div>
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <img src="../../img/icon.png"></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li <?php if($filename=='index.php') { echo "class='active'"; } ?> >
              <a href="index.php"> 
                <span class="fa-stack fa-fw">
                  <i class="fa fa-file-o fa-stack-2x"></i>
                  <i class="fa fa-pencil fa-rotate-90 fa-stack-1x"> </i>
                </span>
                <span>Contracts</span>
              </a>
            </li>                
            <li <?php if($filename=='proposal.php') { echo "class='active'"; } ?>>
              <a href="proposal.php"> <i class="fa fa-thumb-tack fa-fw"></i><span>Proposals</span></a>
            </li>                 
            <li <?php if($filename=='request.php') { echo "class='active'"; } ?>>
              <a href="request.php"> <i class="fa fa-money fa-fw"></i><span>Budget Request</span></a>
            </li>
            <li <?php if($filename=='payment.php') { echo "class='active'"; } ?>>
              <a href="payment.php"> <i class="fa fa-credit-card fa-fw"></i><span>Engager Payment</span></a>
            </li>
            <li <?php if($filename=='history.php') { echo "class='active'"; } ?>>
              <a href="history.php"> <i class="fa fa-history fa-fw"></i><span>History</span></a>
            </li>
            <li <?php if($filename=='employee.php') { echo "class='active'"; } ?>>
              <a href="employee.php"> <i class="fa fa-user fa-fw"></i><span>Employees</span></a>
            </li>
            <li <?php if($filename=='activity.php') { echo "class='active'"; } ?>>
              <a href="activity.php"> 
                <span class="fa-stack fa-fw">
                  <i class="fa fa-user-o fa-inverse fa-stack-2x"> </i>
                  <i class="fa fa-history fa-inverse fa-stack-1x"></i>
                </span>
                <span>Activity Log</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>