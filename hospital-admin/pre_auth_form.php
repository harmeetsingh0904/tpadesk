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
                    <h1>FORM</h1>
                    <small>Pre-Authorization-Form</small>
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
                                        <i class="fa fa-list"></i>pre-auth-form-Details</a>
                                </div>
                            </div>

                            <div class="panel-body">
                                <form class="col-sm-12 " action="pre_auth_form_db.php" method="post">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name of Hospital</label>
                                            <input type="text" class="form-control" name="Name_of_Hospital" placeholder="Enter Hospital Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Addrerss of Hospital</label>
                                            <textarea class="form-control" rows="2" name="Addrerss_of_Hospital" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>TPA Person Name</label>
                                            <input type="text" class="form-control" name="TPA_Person_Name" placeholder="Enter TPA Contact Person Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>TPA Person Mobile Number</label>
                                            <input type="number" class="form-control" name="TPA_Person_Mobile_Number" maxlength="10" placeholder="Enter TPA Person Mobile Number" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name of Treating Doctor</label>
                                            <input type="text" class="form-control" name="Name_of_Treating_Doctor" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Doctor Registration Number</label>
                                            <input type="text" name="Doctor_Registration_Number" class="form-control" required>
                                        </div>

                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Hospital Rohini ID </label>
                                            <input type="text" class="form-control" name="Hospital_Rohini_ID" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Admission</label>
                                            <input name="text" name="Date_of_Admission" class="datepicker form-control " type="date" placeholder="Enter Name of TPA">
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Discharge</label>
                                            <input name="text" class="form-control " name="Date_of_Discharge" type="date" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nature of illness</label>
                                            <textarea class="form-control" rows="2" name="Nature_of_illness" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Past history of present ailment</label>
                                            <textarea name="Past_history_of_present_ailment" class="form-control" rows="2" required></textarea>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Upload pre-auth-form</label>
                                                <input type="file" name="Pre_auth_form" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Upload Breakup bill</label>
                                                <input type="file" name="Breakup_Bill" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Upload Policy copy</label>
                                                <input type="file" name="Policy_copy" required>
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