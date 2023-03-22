<!-- PRE_AUTH_FORM  -->
<?php include '../global/header.php'; ?>
<!--- header site navbar-->
<?php include '../global/header_navbar.php';?>
        <!-- =============================================== -->
        <!-- Left side column. contains the sidebar -->
        <?php include '../global/left-sidebar-menu.php'; ?>
        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-note2"></i>
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
                    <h1>REQUEST</h1>
                    <small>Service Request</small>
                    <ol class="breadcrumb hidden-xs">
                        <li><a href="index-2.html"><i class="pe-7s-home"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- Form controls -->
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#">
                                        <i class="fa fa-list"></i>Service request</a>
                                </div>
                            </div>

                            <div class="panel-body">
                                <form class="col-sm-12 " action="service_request_db.php" method="post">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name Of The Hospital</label>
                                            <input type="text" class="form-control" name="txt_service_hospital_name" placeholder="Name Of The Hospital" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Full Address Of The Hospital</label>
                                            <input type="text" class="form-control" name="txt_service_hospital_adsress" placeholder="Full Address Of The Hospital" required>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" name="txt_service_hospital_city" placeholder="City" required>
                                        </div>
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control" name="txt_service_hospital_state" placeholder="State" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="number" name="txt_Pincode" class="form-control" placeholder="Pincode" name="txt_service_pincode" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input name="txt_service_contact_person" class="form-control" type="text" placeholder="Contact Person" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input name="txt_service_contact_number" class=" form-control" type="number" placeholder="Contact Number" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input name="txt_service_email_Id" class="form-control" type="email" checked="checked" placeholder="Email Id" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Select The Service Required</label>
                                            <select name="txt_service_required" class="form-control" type="text" checked="checked" placeholder="Select The Service Required" required>
                                                <option value="">AB</option>
                                                <option value="">BC</option>
                                                <option value="">CD</option>
                                                <option value="">DE</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Hospital Profile</label>
                                            <input name="txt_upload_profile" class="form-control" type="file" placeholder="Upload Hospital Profile" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Existing TPA List</label>
                                            <input name="txt_service_TPA_list" class="form-control" type="file" placeholder="Upload Existing TPA List" required>
                                        </div>
                                    </div>
                                    <div class="reset-button">
                                        <input type="reset" class="btn btn-warning" value="Reset">
                                        <input type="submit" class="btn btn-success" value="Save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->

        <?php include '../global/footer.php'; ?>