<?php
require_once('../global/connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Service request Data Page</title>
</head>

<body>
<?php
{    
     $txt_service_hospital_name = $_POST['txt_service_hospital_name'];
     $txt_service_hospital_adsress = $_POST['txt_service_hospital_adsress'];
     $txt_service_hospital_city = $_POST['txt_service_hospital_city'];
     $txt_service_hospital_state = $_POST['txt_service_hospital_state'];
     $txt_service_pincode = $_POST['txt_service_pincode'];
     $txt_service_contact_person = $_POST['txt_service_contact_person'];
     $txt_service_contact_number = $_POST['txt_service_contact_number'];
     $txt_service_email_Id = $_POST['txt_service_email_Id'];
     $txt_service_required = $_POST['txt_service_required'];
     $txt_upload_profile = $_POST['txt_upload_profile'];
     $txt_service_TPA_list = $_POST['txt_service_TPA_list'];
     
$sql= "INSERT INTO `Service-request`(`col_patient_id`, `col_service_hospital_name`, `col_service_hospital_full_address`,
 `col_service_hospital_city`, `col_service_hospital_state`, `col_service_hospital_pincode`, `col_service_contact_person`,
  `col_service_contact_number`, `col_service_email_id`, `col_select_the_service`, `col_Upload_Hospital_Profile`, `col_Upload_Existing_TPA_List`) 
VALUES ('$txt_service_hospital_name','$txt_service_hospital_name','$txt_service_hospital_adsress','$txt_service_hospital_city','$txt_service_hospital_state','$txt_service_pincode',
'$txt_service_contact_person','$txt_service_contact_number','$txt_service_email_Id','$txt_service_required','$txt_upload_profile','$txt_service_TPA_list')";


if(mysqli_query($conn, $sql)){
    echo "<script type='text/javascript'>
    alert('Your Service Request successfully.We regret for incovience');
    window.location.href = 'service_request.php';
    </script>";
    
} else{
    echo "Try again $sql. "
        . mysqli_error($conn);
}

 
// Close connection
mysqli_close($conn);
}
?> 


</body>

</html>