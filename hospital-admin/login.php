<?php

    require_once('../global/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
       $username = $_POST['username'];
       $password = $_POST['password'];
       $sql = "SELECT * FROM `hospital_registration_form` WHERE `col_username`='$username' and `col_password`='$password'";
    
        $resulthospital=mysqli_query($conn,$sql);
         $resu=mysqli_fetch_assoc($resulthospital);
        if($resu)
        {       
                $_SESSION['hospitalID'] = $resu['col_hospital_registration_form_id'];//Get Hospital ID
                header("Location:patient_details.php");
                exit;
            //redirect to dashboard
        }
        else{
echo "<script type='text/javascript'>
alert('Invalid Username or Password');
window.location.href = 'index.php';
</script>";       }
    }
        ?>
</body>

</html>