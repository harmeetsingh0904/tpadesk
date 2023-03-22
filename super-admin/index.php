<?php include '../global/header.php'?>
<body>
    <!-- Content Wrapper -->
    <div class="login-wrapper">
        <!-- <div class="back-link">
            <a href="#" class="btn btn-success">Tpa Desk</a>
        </div> -->
        <div class="container-center">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>Login</h3>
                            <small><strong>Please enter your credentials to login.</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="login.php" method="POST" id="loginForm" novalidate>
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="email" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                            <span class="help-block small">Your unique username to app</span>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                            <span class="help-block small">Your strong password</span>
                        </div>
                        <div>
                            <input type="submit" value="submit" name="submit" class="btn btn-primary"/>
                            <a class="btn btn-warning" href="/Hospital_Registration_form.php">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- jQuery -->
    <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

<!-- Mirrored from thememinister.com/health/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Jan 2023 04:05:25 GMT -->
</html>