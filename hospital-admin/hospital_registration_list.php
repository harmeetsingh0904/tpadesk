<?php include '../global/header.php'; ?>
<!--- header site navbar-->
<?php include '../global/header_navbar.php';?>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
<?php include '../global/left-sidebar-menu.php';?>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="header-icon">
          <i class="pe-7s-box1"></i>
        </div>
        <div class="header-title">
          <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <h1>Hospital</h1>
          <small>Hospital List</small>
          <ol class="breadcrumb hidden-xs">
            <li><a href="index-2.html"><i class="pe-7s-home"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </div>
      </section>
      <!-- Main content -->
      <section class="content">


        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
              <div class="panel-heading">
                <div class="btn-group">
                  <a class="btn btn-success" href="/Hospital_registration_form.php"> <i class="fa fa-plus"></i> Add Hospital</a>
                </div>

              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="panel-header">
                    <div class="col-sm-4">
                      <div class="dataTables_length" id="example_length">
                        <label>Display <select name="example_length">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select> records per page</label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="dataTables_length">
                        <a class="btn btn-default buttons-copy btn-sm" tabindex="0"><span>Copy</span></a>
                        <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0"><span>CSV</span></a>
                        <a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0"><span>Excel</span></a>
                        <a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0"><span>PDF</span></a>
                        <a class="btn btn-default buttons-print btn-sm" tabindex="0"><span>Print</span></a>

                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="dataTables_length">
                        <div class="input-group custom-search-form">
                          <input type="search" class="form-control" placeholder="search..">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                              <span class="glyphicon glyphicon-search"></span>
                            </button>
                          </span>
                        </div><!-- /input-group -->
                      </div>
                    </div>
                  </div>

                </div>
                <div class="table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead class="success">
                      <tr>
                        <th>Patient ID</th>
                        <th>Hospital ID</th>
                        <th>Hospital Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th>Owner Name</th>
                        <th>Owner mobile Number</th>
                        <th>Owner Email id</th>
                        <th>TPA Manager Name</th>
                        <th>TPA Manager mobile number</th>
                        <th>TPA Manager Email ID</th>
                        <th>Type Of Hospital</th>
                        <th>Type Of Hospital(Speciality)</th>
                        <th>Rohini Code</th>
                        <th>Date And Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include_once('../global/connection.php');
                      $selecUser = "SELECT * FROM `Hospital_Registration_form`";
                      $result = mysqli_query($conn, $selecUser);

                      if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>" . $row['col_pateint_id'] . "</td>";
                          echo " <td>" . $row['col_hospital_registration_form_id'] . "</td>";
                          echo "<td>" . $row['col_name_of_the_hospital'] . "</td>";
                          echo "<td>" . $row['col_address_of_the_hospital'] . "</td>";
                          echo "<td>" . $row['col_city_of_the_hospital'] . "</td>";
                          echo "<td>" . $row['col_state_of_the_hospital'] . "</td>";
                          echo "<td>" . $row['col_pincode_of_the_hospital'] . "</td>";
                          echo "<td>" . $row['col_owner_name'] . "</td>";
                          echo "<td>" . $row['col_owner_mobile_number'] . "</td>";
                          echo "<td>" . $row['col_owner_email_id'] . "</td>";
                          echo "<td>" . $row['col_TPA_manager_name'] . "</td>";
                          echo "<td>" . $row['col_TPA_manager_owner_mobile_number'] . "</td>";
                          echo "<td>" . $row['col_TPA_manager_email_id'] . "</td>";
                          echo "<td>" . $row['col_type_of_hospital'] . "</td>";
                          echo "<td>" . $row['col_Type_of-hospital'] . "</td>";
                          echo "<td>" . $row['col_rohini_code'] . "</td>";
                          echo "<td>" . $row['col_current_date'] . "</td>";
                          echo "</tr>";
                        }
                      } else {
                        echo "0 results";
                      }

                      ?>
                    </tbody>
                  </table>
                </div>
                <div class="page-nation text-right">
                  <ul class="pagination pagination-large">
                    <li class="disabled"><span>«</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li class="disabled"><span>...</span></li>
                    <li>
                    <li><a rel="next" href="#">Next</a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->
    <?php include '../global/footer.php'; ?>