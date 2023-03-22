<!-- RAISE_A_TICKET   -->
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
                    <h1>TICKET</h1>
                    <small>Raise-a-ticket</small>
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
                                    <a class="btn btn-primary" href="#"> <i class="fa fa-list"></i>rasie-a-ticket</a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="Raise-A-ticket-db.php" method="post">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name Of The Hospital</label>
                                            <input type="text" class="form-control" name="txt_raise_hospital_name" placeholder="Name Of The Hospital" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Full Address Of The Hospital</label>
                                            <input type="text" class="form-control" name="txt_raise_hospital_address" placeholder="Full Address Of The Hospital" required>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" name="txt_taise_city" placeholder="City" required>
                                        </div>
                                        <div class=" form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control" name="txt_raise_State" placeholder="State" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="number" class="form-control" name="txt_raise_Pincode" placeholder="Pincode" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input name="txt_raise_contact_person" class="form-control" type="text" placeholder="Contact Person" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input name="txt_raise_contact_number" class=" form-control" type="number" placeholder="Contact Number" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input name="txt_raise_email_Id" class="form-control" type="email" checked="checked" placeholder="Email Id" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Describe The Issue You're Facing</label>
                                            <textarea name="txt_facing_issue" class="form-control" type="text" rows="4" checked="checked" placeholder="Describe The Issue You're Facing" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
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
        </div>

        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

    <?php include '../global/footer.php'; ?>