<!-- HOSPITAL_REGISTRATOION _FORM  -->
<?php include '../global/header.php'; ?>
<!--- header site navbar-->
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content"style="margin-right:250px;">
        <div class="row">
            <!-- Form controls -->
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="btn-group">
                            <a class="btn btn-primary" href="#">
                                <i class="fa fa-list"></i>Hospital Registration Form</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="hospital_registration_db.php" method="post">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label style="color: #009688;">Username</label>
                                    <input type="text" class="form-control" placeholder="Enter Username" name="txt_Username" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <label style="color: #009688;">Password</label><br>
                                    <input class="form-control" type="text" placeholder="Enter Password" name="txt_password" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <hr>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name Of The Hospital</label>
                                    <input type="text" class="form-control" placeholder="Name Of The Hospital" name="txt_hospital_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Full Address Of The Hospital</label>
                                    <textarea rows="2" class="form-control" placeholder="Full Address Of The Hospital" name="txt_address" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="city" name="txt_city" required>
                                </div>

                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" placeholder="state" name="txt_state" required>

                                </div>
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="number" class="form-control" name="num_pincode">

                                </div>

                                <div class="form-group">
                                    <label>Name Of The Hospital Owner</label>
                                    <input name="txt_owner_name" class="datepicker form-control hasDatepicker" type="text" placeholder="Name Of The Hospital Owner" required>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number Of The Hospital Owner</label>
                                    <input name="owner_mobile_number" class="form-control" type="number">
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <label>Email ID Of The Hospital Owner</label><br>
                                    <input class="form-control" placeholder="Email Id Of The Hospital Owner" name="txt_owner_email_id" type="email" required>
                                </div>
                                <div class="form-check">
                                    <label>Name Of The TPA Manager</label><br>
                                    <input class="form-control" type="text" placeholder="Name Of The TPA Manager" name="txt_TPA_manager_name" required>
                                </div>
                                <div class="form-check">
                                    <label>Mobile Number Of The TPA Manager</label><br>
                                    <input class="form-control" type="number" placeholder="Mobile Number Of The TPA Maneger" name="txt_manager_mobile_number" required>
                                </div>
                                <div class="form-check">
                                    <label>Registered Email Id Of The Hospital</label>
                                    <input class="form-control" type="email" placeholder="Registered Email Id Of The Hospital" name="txt_hospital_email_id" checked="checked" required>
                                </div>
                                <div class="form-check">
                                    <label>Type Of Hospital</label><br>
                                    <select name="txt_hospital_type_care" class="form-control" id="hospital">
                                        <option value="Primary care">Primary care</option>
                                        <option value="Secondary care">Secondary care</option>
                                        <option value="Tertiary care">Tertiary care</option>
                                    </select>
                                </div>
                                <div class="form-check">
                                    <label>Type Of Hospital</label><br>
                                    <select name="txt_hospital_type_speciality" class="form-control" id="hospital">
                                        <option value="Single Speciality">Single Speciality</option>
                                        <option value="Multi Speciality">Multi Speciality</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Rohini Code</label>
                                    <input class="form-control" type="text" placeholder="Rohini Code Of The Hospital" name="txt_rohini_code" required>
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

    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->

<?php include '../global/footer.php'; ?>