<?php
	include 'head.php';
	include 'sidebar.php';
	include 'header.php';
?>
      <div class="container-fluid pagePadding">
        <div class="row">
          <div class="col-md-6">
            <h1 class="display-4"> 
              Employee List <button class="btn btn-outline-primary btn-circle"> <i class="fa fa-plus"> </i> </button>
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
          <div class="col-12">
            <table class="table table-bordered table-hover">
              <!-- make table responsive -->
              <thead class="thead-dark">
                <tr>
                  <th class="text-center"> Engager </th>
                  <th class="text-center"> Tour/Event Durations </th>
                  <th class="text-center"> Status </th>
                  <th class="text-center"> Details </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> SLU </td>
                  <td> 11/15/2017 11:00PM - 11/19/2017 8:00AM </td>
                  <td> All Checked </td>
                  <td class="text-center"> <a href="tours_availability.html" class="btn btn-info"> <i class="fa fa-search-plus"> </i> </a> </td>
                </tr>
                <tr>
                  <td> SLU </td>
                  <td> 11/15/2017 11:00PM - 11/19/2017 8:00AM </td>
                  <td> Not Yet All Checked </td>
                  <td class="text-center"> <a href="tours_availability.html" class="btn btn-info"> <i class="fa fa-search-plus"> </i> </a> </td>
                </tr>
                <tr>
                  <td> SLU </td>
                  <td> 11/15/2017 11:00PM - 11/19/2017 8:00AM </td>
                  <td> All Checked </td>
                  <td class="text-center"> <a href="tours_availability.html" class="btn btn-info"> <i class="fa fa-search-plus"> </i> </a> </td>
                </tr>
                <tr>
                  <td> SLU </td>
                  <td> 11/15/2017 11:00PM - 11/19/2017 8:00AM </td>
                  <td> Not Yet All Checked </td>
                  <td class="text-center"> <a href="tours_availability.html" class="btn btn-info"> <i class="fa fa-search-plus"> </i> </a> </td>
                </tr>
                <tr>
                  <td> SLU </td>
                  <td> 11/15/2017 11:00PM - 11/19/2017 8:00AM </td>
                  <td> All Checked </td>
                  <td class="text-center"> <a href="tours_availability.html" class="btn btn-info"> <i class="fa fa-search-plus"> </i> </a> </td>
                </tr>
                <tr>
                  <td> SLU </td>
                  <td> 11/15/2017 11:00PM - 11/19/2017 8:00AM </td>
                  <td> Not Yet All Checked </td>
                  <td class="text-center"> <a href="tours_availability.html" class="btn btn-info"> <i class="fa fa-search-plus"> </i> </a> </td>
                </tr>
                <tr>
                  <td> SLU </td>
                  <td> 11/15/2017 11:00PM - 11/19/2017 8:00AM </td>
                  <td> All Checked </td>
                  <td class="text-center"> <a href="tours_availability.html" class="btn btn-info"> <i class="fa fa-search-plus"> </i> </a> </td>
                </tr>
                <tr>
                  <td> SLU </td>
                  <td> 11/15/2017 11:00PM - 11/19/2017 8:00AM </td>
                  <td> Not Yet All Checked </td>
                  <td class="text-center"> <a href="tours_availability.html" class="btn btn-info"> <i class="fa fa-search-plus"> </i> </a> </td>
                </tr>
                <tr>
                  <td> SLU </td>
                  <td> 11/15/2017 11:00PM - 11/19/2017 8:00AM </td>
                  <td> All Checked </td>
                  <td class="text-center"> <a href="tours_availability.html" class="btn btn-info"> <i class="fa fa-search-plus"> </i> </a> </td>
                </tr>
                <tr>
                  <td> SLU </td>
                  <td> 11/15/2017 11:00PM - 11/19/2017 8:00AM </td>
                  <td> Not Yet All Checked </td>
                  <td class="text-center"> <a href="tours_availability.html" class="btn btn-info"> <i class="fa fa-search-plus"> </i> </a> </td>
                </tr>
                <tr>
                  <td> SLU </td>
                  <td> 11/15/2017 11:00PM - 11/19/2017 8:00AM </td>
                  <td> All Checked </td>
                  <td class="text-center"> <a href="tours_availability.html" class="btn btn-info"> <i class="fa fa-search-plus"> </i> </a> </td>
                </tr>
                <tr>
                  <td> SLU </td>
                  <td> 11/15/2017 11:00PM - 11/19/2017 8:00AM </td>
                  <td> Not Yet All Checked </td>
                  <td class="text-center"> <a href="tours_availability.html" class="btn btn-info"> <i class="fa fa-search-plus"> </i> </a> </td>
                </tr>
              </tbody>
            </table>
            <hr>
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
      </div>
<?php include 'footer.php'; ?>