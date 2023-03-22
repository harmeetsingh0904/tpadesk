
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
                      
                    <h1>Patient</h1>
                    <small>patient Details</small>
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
                                        <i class="fa fa-list"></i> patient Details </a>
                                        
                                </div>
                            </div>

                            <div class="panel-body">
                            <div id="usercheck" class="text-center"><h6>All Fields Are Required</h6></div>

                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                        <input type="hidden" name="HopitalId"  id="HopitalId" value="<?php echo $HopitalId;?>"
                                            <label>Patient Name</label>
                                            <input type="text" class="form-control" name="Patient_Name" id="Patient_Name" placeholder="Enter Patient Name" required />
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" name="Date_of_Birth" id="Date_of_Birth" placeholder="Enter Date of Birth" required>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Gender:</label><br>
                                            <select class="form-control" name="gender" id="gender">
                                             <option value="1">Male</option>
                                             <option value="2">FeMale</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Address of Patient</label>
                                            <textarea class="form-control" name="Address_of_Patient"  id="Address_of_Patient" rows="2" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Patient Mobile Number</label>
                                            <input type="number" class="form-control" id="Patient_Mobile_Number" name="Patient_Mobile_Number" maxlength="10" placeholder="Enter Patient Mobile Number" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Patient Attendant Name</label>
                                            <input type="text" name="Patient_Attendant_Name" id="Patient_Attendant_Name" class="form-control" placeholder="Enter Patient Attentdant Name" required>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Attendant Contact Number</label>
                                            <input type="tel" class="form-control" id="Attendant_Contact_Number" name="Attendant_Contact_Number" maxlength="10" placeholder="Enter Attendant Contact Number " required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name of insurance Comapny </label>
                                            <input type="text" class="form-control" id="Name_of_insurance_Comapny" name="Name_of_insurance_Comapny" placeholder="Enter Name of insurance Comapny" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name of TPA</label>
                                            <input name="Name_of_TPA" id="Name_of_TPA" class="datepicker form-control " type="text" placeholder="Enter Name of TPA">
                                        </div>
                                        <div class="form-group">
                                            <label>Policy Number</label>
                                            <input name="Policy_Number" id="Policy_Number" class="datepicker form-control " type="text" placeholder="enter Policy Number" required>
                                        </div>
                                        <div class="form-group">
                                            <label>TPA ID card Number</label>
                                            <input type="tel" name="TPA_ID_card_Number" id="TPA_ID_card_Number" class="form-control" placeholder="Enter TPA ID card Numberr " required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name of Corporate</label>
                                            <input name="Name_of_Corporate"  id="Name_of_Corporate" class="form-control " type="text" placeholder="Enter Name of Corporate">
                                        </div>
                                        <div class="form-group">
                                            <label>Employee ID</label>
                                            <input name="Employee_ID" class="form-control" id="Employee_ID" type="text" placeholder="enter Employee ID">
                                        </div>
                                        </div>

                                    <div class="reset-button">
                                        <input type="reset" class="btn btn-warning" value="Reset">
                                        <input type="submit" class="btn btn-success" value="submit" id="save-data">
                                        
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
<div id ="table-data"></div>
            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
       $(document).ready(function()
       {
        function loadtable()
        {
            $.ajax({
            url:"load-data.php",
            type:"POST",
            success: function(data)
            {
                $("#table-data").html(data);
            }
            });
        }
       loadtable();

        $("#save-data").on("click",function(e)
        { 
            e.preventDefault();//Default Functionality None
            var Pname = $("#Patient_Name").val();
            var HopitalId = $("#HopitalId").val();
            var DateofBirth = $("#Date_of_Birth").val();
            var Gender = $("#gender").val();
            var AddressofPatient = $("#Address_of_Patient").val();
            var PatientMobileNumber = $("#Patient_Mobile_Number").val();
            var PatientAttendantName = $("#Patient_Attendant_Name").val();
            var AttendantContactNumber = $("#Attendant_Contact_Number").val();
            var NameofinsuranceComapny = $("#Name_of_insurance_Comapny").val();
            var NameofTPA = $("#Name_of_TPA").val();
            var PolicyNumber = $("#Policy_Number").val();
            var TPAIDcardNumber = $("#TPA_ID_card_Number").val();
            var NameofCorporate = $("#Name_of_Corporate").val();
            var EmployeeID = $("#Employee_ID").val();
            //alert(Gender);

     let usernameValue = $("#usernames").val();
    if (Pname.length == "" || DateofBirth =="" || Gender =="" || AddressofPatient =="" || Gender =="" ) {
        alert("All Fields Are Required");
    //   $("#usercheck").show();
      usernameError = false;
      return false;
    } 
            $.ajax(
                {
                    url:"patient_details_db.php",//Insert Funtion File
                    type:"POST",//Method
                    data:
                    {
                        Patient_NameD : Pname,
                        HopitalIdD : HopitalId,
                        DateofBirthD : DateofBirth,
                        GenderD : Gender,
                        AddressofPatientD : AddressofPatient,
                        Patient_Attendant_NameD  : AddressofPatient,
                        Patient_Mobile_NumberD : PatientMobileNumber,
                        Patient_Attendant_NameD : PatientAttendantName,
                        Attendant_Contact_NumberD : AttendantContactNumber,
                        Name_of_insurance_ComapnyD : NameofinsuranceComapny,
                        Name_of_TPAD : NameofTPA,
                        Policy_NumberD : PolicyNumber,
                        TPA_ID_card_NumberD : TPAIDcardNumber,
                        Name_of_CorporateD : NameofCorporate,
                        Employee_IDD : EmployeeID
                    },
                    //Which Data We are sending to file
                    success:function(data)
                    {
                       // alert(data);

                        if(data == 1)
                        {
                           alert("Record Saved");
                        }
                        else
                        {
                            alert("Can't Save");
                        }

                    }
                });
        });

 

       });

    </script>
    <style>
        #usercheck{display: none;color: red;}
       
    </style>
        <?php include '../global/footer.php'; ?>
      