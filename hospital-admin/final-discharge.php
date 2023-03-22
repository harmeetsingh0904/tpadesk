<!-- Final_Dischage -->
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
                    <h1>Final</h1>
                    <small>Final Discharge</small>
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
                                        <i class="fa fa-list"></i>Final Discharge</a>
                                </div>
                            </div>

                            <div class="panel-body">
                                <form class="col-sm-12" action="final-discharge-db.php" method="post">
                                    <div class="form-group">
                                        <label>Final Billed amount</label>
                                        <input type="number" name="final_billed_amount" class="form-control" placeholder="Enter final billed amount" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Initial Approved amount</label>
                                        <input type="number" name="Initial_approved_amount" class="form-control" placeholder="Enter Initial Approved amount" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Final Discharge Documents</label>
                                        <input type="file" name="Upload_final_discharge_documents" required>
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