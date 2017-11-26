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
          $query = "SELECT user_id, last_name, first_name, department, email, contact_no, status FROM user";
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
                    <select class="form-control form-control-sm" name="results">
                      <option value="15"> 15 </option>
                      <option value="30"> 30 </option>
                      <option value="50"> 50 </option>
                      <option value="100"> 100 </option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="results"> Showing 7 of 7 results </p>
          </div>
          <div class="col justify-content-end" id="pagination">
            <p class="text-right">
              <a href="#" class="number active"> 1 </a>
              <a href="#" class="number"> 2 </a>
              <a href="#" class="number"> 3 </a>
              <a href="#" class="number"> 4 </a>
              <a href="#" class="number"> 5 </a>
              <a href="#" class="number"> 6 </a>
              <a href="#" class="number"> 7 </a>
              <a href="#" class="number"> 8 </a>
              <a href="#" class="number"> 9 </a>
              <a href="#" class="number"> 10 </a>
              <a href="#" class="btn btn-primary btn-sm"> <i class="fa fa-caret-right"> </i> </a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table class="table table-bordered table-hover">
              <thead class="thead-dark">
                <tr>
                  <th class="text-center"> No. </th>
                  <th class="text-center"> Name </th>
                  <th class="text-center"> Department </th>
                  <th class="text-center"> Email </th>
                  <th class="text-center"> Contact Number </th>
                  <th class="text-center"> Status </th>
                  <th class="text-center"> Details </th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $counter=0;
                  while($row = $result->fetch_assoc()){ 
                    $name = ucfirst($row['last_name']) . ", " . ucfirst($row['first_name']);
                    $department = ucfirst($row['department']);
                    $email = $row['email'];
                    $contact_no = $row['contact_no'];
                    $status = ucfirst($row['status']);
                    $counter++;
                ?>
                <tr>
                  <td class="text-center"> <?php echo $counter; ?> </td>
                  <td> <?php echo $name; ?> </td>
                  <td> <?php echo $department; ?> </td>
                  <td> <?php echo $email; ?> </td>
                  <td> <?php echo $contact_no; ?> </td>
                  <td class="text-center"> <span class=<?php if($status == 'Offline') { ?>
                        "gray-status"
                      <?php } else if($status == 'Online') { ?> 
                        "green-status"
                      <?php } else { ?>
                        "red-status"
                      <?php } ?>
                      > <?php echo $status; ?> </span>
                  </td>
                  <td class="text-center">
                    <a href="employee_details.php?user=<?php echo $row['user_id']; ?>" class="btn btn-circle btn-primary btn-sm">
                      <i class="fa fa-search"> </i> 
                    </a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

        <?php } else { ?>
          <h2 class="text-center"> THERE ARE NO EMPLOYEES YET. </h2>
        <?php } ?>
      </div>


<!-- ADD NEW EMPLOYEE PHP -->
<?php
  if(isset($_POST['add'])) {
    if((isset($_POST['lastname']) || isset($_POST['firstname']) || isset($_POST['email']) || isset($_POST['mobile'])) || $_POST['department']!='default') {
      $lastname = $haranahtours->real_escape_string($_POST['lastname']);
      $firstname = $haranahtours->real_escape_string($_POST['firstname']);
      $email = $haranahtours->real_escape_string($_POST['email']);
      $contact = $haranahtours->real_escape_string($_POST['mobile']);
      $department = $haranahtours->real_escape_string($_POST['department']);
      $status = 'offline';
      $password = substr($department, 0, 2) . substr($lastname, 0, 2) . substr($firstname, 0 , 2) . substr($contact, -3);

      $query = "INSERT INTO user (last_name, first_name, department, email, password, contact_no, status) VALUES ('$lastname','$firstname','$department','$email','$password','$contact','$status')";
      $haranahtours->query($query);
    }
  }
?>


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
      <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <div class="modal-body">
          <div class="form-group row">
            <div class="col-md-4 text-right">
              <label> Employee Name: </label>
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control form-control-sm" placeholder="Last Name" name="lastname">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control form-control-sm" placeholder="First Name" name="firstname">
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
                <select class="form-control form-control-sm text-center" name="department">
                  <option selected value="default"> - - - - </option>
                  <option value="Sales"> Sales </option>
                  <option value="Tours"> Reservation for Tours </option>
                  <option value="Transportation"> Reservation for Transportation </option>
                  <option value="Accounting"> Accounting </option>
                  <option value="Management"> Management </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Cancel</button>
          <input type="submit" value="Add New Employee" name="add" class="btn btn-primary btn-sm" />
        </div>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>