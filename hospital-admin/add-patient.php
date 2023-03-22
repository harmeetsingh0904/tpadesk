<!---ADD PATIENT FORM--->
<?php include '../global/header.php'?>
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
                    <form action="#" method="get"
                        class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn"><i
                                        class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <h1>Patient</h1>
                    <small>Add patient</small>
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
                                    <a class="btn btn-primary" href="pt-list.html">
                                        <i class="fa fa-list"></i> Add patient </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="add_patient_db.php" method="post">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="first_name_add_patient"
                                                placeholder="Enter First Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="last_name_add_patient"
                                                placeholder="Enter last Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="number" class="form-control" name="mobile_number_add_patient"
                                                placeholder="Enter Mobile" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Picture upload</label>
                                            <input type="file" name="pictureupload_add_patient">
                                        </div>

                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input name="date_of_birth_add_patient"
                                                class="datepicker form-control hasDatepicker" type="date"
                                                placeholder="Date of Birth">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Blood group</label>
                                            <select class="form-control" name="blood_group">
                                                <option>A+</option>
                                                <option>AB+</option>
                                                <option>O+</option>
                                                <option>AB-</option>
                                                <option>B+</option>
                                                <option>A-</option>
                                                <option>B-</option>
                                                <option>O-</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sex</label><br>
                                            <label class="radio-inline"><input name="sex_add_patient" value="1" checked="checked"
                                                    type="radio">Male</label>
                                            <label class="radio-inline"><input name="sex_add_patient" value="0"
                                                    type="radio">Female</label>

                                        </div>
                                        <div class="form-check">
                                            <label>Status</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="1"  checked="checked">Active</label> 
                                            <label class="radio-inline"><input
                                                    type="radio" name="status" value="0">Inactive</label>
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address_add_paitent" rows="3" required></textarea>
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
      
    <?php include '../global/footer.php';?>