<!-- TPA_EMPANELMENT_REQUEST  -->
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
                    <small>TPA empanelment request</small>
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
                                        <i class="fa fa-list"></i>TPA empanelment request</a>
                                </div>
                            </div>

                            <div class="panel-body">
                                <form class="col-sm-12 " action="tpa_empanelment_request_db.php" method="post">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name Of The Hospital</label>
                                            <input type="text" class="form-control" placeholder="Enter Name Of The Hospital" name="txt_empanelment_hospital_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Full Address Of The Hospital</label>
                                            <input type="text" class="form-control" placeholder="Enter Full Address Of The Hospital " name="txt_empanelment_hospital_address" required>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" placeholder="Enter City " name="txt_empanelment_hospital_city" required>
                                        </div>
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control" placeholder="state" name="txt_empanelment_hospital_state" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="number" class="form-control" name="txt_empanelment_hospital_pincode">
                                        </div>

                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input name="txt_empanelment_contact_person" class="form-control" type="text" placeholder="Enter Contact Person name " required>
                                        </div>

                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input name="txt_empanelment_contact_number" class=" form-control" type="number" placeholder="Enter Contact Number" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label>Email Id</label>
                                                <input name="txt_empanelment_email_id" class="form-control" type="email" placeholder="Enter Email Id" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label>Rohini Registration Number</label>
                                                <input name="txt_empanelment_rohini_reg_number" class="form-control" type="text" placeholder=" Enter Rohini Registration No" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label>Upload Hospital Profile</label>
                                                <input name="txt_empanelment_profile" class="form-control" type="file">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label>Select The TPA Required</label>
                                                <input name="txt_empanelment_TPA" class="form-control" type="file">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="reset-button">
                                        <input type="reset" class="btn btn-warning" value="Reset">
                                        <input type="submit" class="btn btn-success" value="Save">
                                    </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
        </div>

        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

    <?php include '../global/footer.php'; ?>