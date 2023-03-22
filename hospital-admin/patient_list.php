


<?php include '../global/header.php';
?>
<!--- header site navbar-->
<?php include '../global/header_navbar.php'; ?>
<!-- =============================================== -->
<!-- Left side column. contains the sidebar -->
<?php include '../global/left-sidebar-menu.php'; ?>
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div class="header-title">

            </form>
            <h1>Patient</h1>
            <small>Patient List</small>
            <ol class="breadcrumb hidden-xs">
                <li><a href="i#"><i class="pe-7s-home"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
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
                <div id="table-data"></div>
            </div>
        </div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function() {
        function loadtable() {
            $.ajax({
                url: "load-data.php",
                type: "POST",
                success: function(data) {
                    $("#table-data").html(data);
                }
            });
        }
        loadtable();
        $("#save-data").on("click", function(e) {
            e.preventDefault(); //Default Functionality None
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
            if (Pname.length == "" || DateofBirth == "" || Gender == "" || AddressofPatient == "" || Gender == "") {
                alert("All Fields Are Required");
                //   $("#usercheck").show();
                usernameError = false;
                return false;
            }
            $.ajax({
                url: "patient_details_db.php", //Insert Funtion File
                type: "POST", //Method
                data: {
                    Patient_NameD: Pname,
                    HopitalIdD: HopitalId,
                    DateofBirthD: DateofBirth,
                    GenderD: Gender,
                    AddressofPatientD: AddressofPatient,
                    Patient_Attendant_NameD: AddressofPatient,
                    Patient_Mobile_NumberD: PatientMobileNumber,
                    Patient_Attendant_NameD: PatientAttendantName,
                    Attendant_Contact_NumberD: AttendantContactNumber,
                    Name_of_insurance_ComapnyD: NameofinsuranceComapny,
                    Name_of_TPAD: NameofTPA,
                    Policy_NumberD: PolicyNumber,
                    TPA_ID_card_NumberD: TPAIDcardNumber,
                    Name_of_CorporateD: NameofCorporate,
                    Employee_IDD: EmployeeID
                },
                //Which Data We are sending to file
                success: function(data) {
                    // alert(data);

                    if (data == 1) {
                        alert("Record Saved");
                    } else {
                        alert("Can't Save");
                    }

                }
            });
        });

    });
    $(document).on("click", ".delete-btn", function() {
        if (confirm("Do you want to Delete This ")) {
            var patientID = $(this).data("id");
            var elementdelete = this;
            //alert(patientID);
            $.ajax({
                url: "delete-patient.php",
                type: "POST",
                data: {
                    Patientid: patientID
                },
                success: function(data) {
                    if (data == 1) {
                        $(elementdelete).closest("tr").fadeOut();
                        alert("Record Deleted");
                    } else {
                        alert("Can't Delete");
                    }
                }
            });
        }
    });
</script>
<style>
    #usercheck {
        display: none;
        color: red;
    }
</style>
<?php include '../global/footer.php'; ?>