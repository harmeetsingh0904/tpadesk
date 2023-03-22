<?php
require_once('../global/connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>hospital_registration Data Page</title>
</head>

<body>

    <?php {
        $txt_hospital_name = $_POST['txt_hospital_name'];
        $txt_address = $_POST['txt_address'];
        $txt_city = $_POST['txt_city'];
        $txt_state = $_POST['txt_state'];
        $num_pincode = $_POST['num_pincode'];
        $txt_owner_name = $_POST['txt_owner_name'];
        $owner_mobile_number = $_POST['owner_mobile_number'];
        $txt_owner_email_id = $_POST['txt_owner_email_id'];
        $txt_TPA_manager_name = $_POST['txt_TPA_manager_name'];
        $txt_manager_mobile_number = $_POST['txt_manager_mobile_number'];
        $txt_hospital_email_id = $_POST['txt_hospital_email_id'];
        $txt_hospital_type_care = $_POST['txt_hospital_type_care'];
        $txt_hospital_type_speciality = $_POST['txt_hospital_type_speciality'];
        $txt_rohini_code = $_POST['txt_rohini_code'];
        $username = $_POST['txt_Username'];
        $password = $_POST['txt_password'];

        
        $sql = "INSERT INTO `Hospital_Registration_form`(`col_pateint_id`,`col_username`, `col_password`, `col_name_of_the_hospital`, 
`col_address_of_the_hospital`, `col_city_of_the_hospital`, `col_state_of_the_hospital`, `col_pincode_of_the_hospital`, `col_owner_name`,
 `col_owner_mobile_number`, `col_owner_email_id`, `col_TPA_manager_name`, `col_TPA_manager_owner_mobile_number`, `col_TPA_manager_email_id`,
  `col_type_of_hospital`, `col_Type_of-hospital`, `col_rohini_code`) 
VALUES ('$txt_hospital_name','$username','$password','$txt_hospital_name','$txt_address','$txt_city','$txt_state','$num_pincode','$txt_owner_name','$owner_mobile_number','$txt_owner_email_id','$txt_TPA_manager_name'
,'$txt_manager_mobile_number','$txt_hospital_email_id','$txt_hospital_type_care','$txt_hospital_type_speciality','$txt_rohini_code')";


        if (mysqli_query($conn, $sql)) {
            echo "YOUR HOSPITAL HAS BEEN SUCESSFULLY REGISTERED WITH TPA DESK.<br><br> PLEASE USE BELOW HOSPITAL CODE FOR FUTURE COMMUNICATIONS 
    HOSPITAL CODE:  $txt_rohini_code 
    ";
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
    }
    ?>
</body>

</html>