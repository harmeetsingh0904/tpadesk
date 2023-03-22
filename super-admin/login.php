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
      echo  $sql = "SELECT * FROM `admin_details` WHERE `user_name`='harmeet' and `password`='Un1que@nav'";
   
        $resulthospital=mysqli_query($conn,$sql);
         $resu=mysqli_fetch_assoc($resulthospital);
        if($resu)
        {       
                $_SESSION['adminID'] = $resu['admin_id'];//Get Hospital ID
                header("Location:hospital-list.php");
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