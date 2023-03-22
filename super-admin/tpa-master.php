<?php include '../global/header.php'; ?>
<!--- header site navbar-->
<?php include '../global/header_navbar.php'; ?>
<!-- =============================================== -->
<!-- Left side column. contains the sidebar -->
<?php include '../global/left-sidebar-menu-super-admin.php'; ?>
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">

            <h1>TPA MASTER</h1>
            <small>TPA Details</small>
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
                                <i class="fa fa-list"></i> ADD TPA </a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div id="usercheck" class="text-center">
                            <h6>All Fields Are Required</h6>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>TPA Name</label>
                                <input type="text" class="form-control" name="TPA_Name" id="TPA_Name" placeholder="Enter Patient Name" required />
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Employee ID</label>
                                <input class="form-control" name="txt_emailID" id="txt_emailID" type="text" placeholder="Enter Email ID">
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
        <div id="table-data"></div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function() {
        function loadtable() {
            $.ajax({
                url: "get-tpa-data.php",
                type: "POST",
                success: function(data) {
                    $("#table-data").html(data);
                }
            });
        }
        loadtable();
        $("#save-data").on("click", function(e) {
            e.preventDefault(); //Default Functionality None
            var TPAName = $("#TPA_Name").val();
            var txtemailID = $("#txt_emailID").val();
            //alert(Gender);
            let usernameValue = $("#TPA_Name").val();
            if (TPAName.length == "" || txtemailID == "" ) {
                alert("All Fields Are Required");
                //   $("#usercheck").show();
                usernameError = false;
                return false;
            }
            $.ajax({
                url: "insert_tpa_master.php", //Insert Funtion File
                type: "POST", //Method
                data: {
                    TPANames: TPAName,
                    txtemailIDs: txtemailID,
                },
                //Which Data We are sending to file
                success: function(data) 
                {
                    console.log(data);

                    //alert(data);
                    if (data == 1) 
                    {
                        alert("Record Saved");
                        reset();
                    } else 
                    {
                        alert("Can't Save");
                         reset();
                    }

                }
            });
        });
    });
</script>
<style>
    #usercheck {
        display: none;
        color: red;
    }
</style>
<?php include '../global/footer.php'; ?>