<?php
  include '../../db.php';
	include 'head.php';
	include 'sidebar.php';
	include 'header.php';
?>
      <div class="container-fluid pagePadding">
        <div class="row">
          <div class="col-md-6">
            <h1 class="display-4"> 
              Employee List 
              <button class="btn btn-outline-primary btn-circle" data-toggle="modal" data-target="#addEmployee"> <i class="fa fa-plus"> </i> </button>
            </h1>
          </div>
          <div class="col-md-6">
            <form>
              <div class="input-group">
                <input type="text" class="form-control form-control-sm" placeholder="Search..." />
                <span class="input-group-addon"> <i class="fa fa-search"> </i> </span>
              </div>
            </form>
          </div>
        </div>
        <?php
          $query = "SELECT eng_id FROM engager";
          $result = $haranahtours->query($query);
          if($result->num_rows > 0) { 
        ?>
        <div class="row">
          <div class="col">
            <div class="card card-body">
              <form>
                <div class="row">
                  <div class="col-md-1">
                    <span style="letter-spacing: 5px;"> FILTERS: </span>
                  </div>
                  <div class="col-md-2 text-right">
                    <label> <strong> Department: </strong> </label>
                  </div>
                  <div class="col-md-2">
                    <select class="form-control form-control-sm">
                      <option> All </option>
                      <option> Sales </option>
                      <option> Tours </option>
                      <option> Transportation </option>
                      <option> Accounting </option>
                      <option> Management </option>
                    </select>
                  </div>
                  <div class="col-md-2 text-right">
                    <label> <strong> Account Status: </strong> </label>
                  </div>
                  <div class="col-md-2">
                    <select class="form-control form-control-sm">
                      <option> All </option>
                      <option> Active </option>
                      <option> Offline </option>
                      <option> Disabled </option>
                    </select>
                  </div>
                  <div class="col-md-2 text-right">
                    <label> <strong> Results Per Page: </strong> </label>
                  </div>
                  <div class="col-md-1">
                    <select class="form-control form-control-sm">
                      <option> 15 </option>
                      <option> 30 </option>
                      <option> 50 </option>
                      <option> 100 </option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <?php } else { ?>
          <h2 class="text-center"> THERE ARE NO EMPLOYEES YET. </h2>
        <?php
          } 
          ?>
      </div>


<!-- ADD NEW EMPLOYEE MODAL -->
<div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="addEmployee" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addEmployee">Add New Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <div class="form-group row">
            <div class="col-md-4 text-right">
              <label> Employee Name: </label>
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control form-control-sm" placeholder="Last Name" name="lastname">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control form-control-sm" placeholder="First Name" name="lastname">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 text-right">
              <label> Employee Email Address: </label>
            </div>
            <div class="col-md-8">
              <div class="input-group">
                <span class="input-group-addon"> <i class="fa fa-envelope"> </i> </span> 
                <input type="email" class="form-control form-control-sm text-right" placeholder="@haranahtours.com.ph" name="email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 text-right">
              <label> Employee Contact No.: </label>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-addon"> <i class="fa fa-phone"> </i> </span>
                <input type="text" class="form-control form-control-sm" placeholder="Telephone" name="phone">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <span class="input-group-addon"> <i class="fa fa-mobile"> </i> </span>
                <input type="text" class="form-control form-control-sm" placeholder="Mobile" name="mobile">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 text-right">
              <label> Select Employee Department: </label>
            </div>
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"> <i class="fa fa-briefcase"> </i> </span>
                <select class="form-control form-control-sm text-center">
                  <option selected disabled value="default"> - - - - </option>
                  <option value="Sales"> Sales </option>
                  <option value="Reservation for Tours"> Reservation for Tours </option>
                  <option value="Reservation for Transportation"> Reservation for Transportation </option>
                  <option value="Accounting"> Accounting </option>
                  <option value="Management"> Management </option>
                </select>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-sm">Add New Employee</button>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>