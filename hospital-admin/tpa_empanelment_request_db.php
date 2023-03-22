<?php
require_once('../global/connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>TPA empanelment Request Data Page</title>
</head>

<body>
<?php
{    
     $txt_empanelment_hospital_name = $_POST['txt_empanelment_hospital_name'];
     $txt_empanelment_hospital_address = $_POST['txt_empanelment_hospital_address'];
     $txt_empanelment_hospital_city = $_POST['txt_empanelment_hospital_city'];
     $txt_empanelment_hospital_state = $_POST['txt_empanelment_hospital_state'];
     $txt_empanelment_hospital_pincode = $_POST['txt_empanelment_hospital_pincode'];
     $txt_empanelment_contact_person = $_POST['txt_empanelment_contact_person'];
     $txt_empanelment_contact_number = $_POST['txt_empanelment_contact_number'];
     $txt_empanelment_email_id = $_POST['txt_empanelment_email_id'];
     $txt_empanelment_rohini_reg_number = $_POST['txt_empanelment_rohini_reg_number'];
     $txt_empanelment_profile = $_POST['txt_empanelment_profile'];
      
$sql= "INSERT INTO `TPA empanelment request`(`col_patient_id`, `col_empanelment_hospital_name`, `col_empanelment_hospital_address`, `col_empanelment_hospital_city`, `col_empanelment_hospital_state`, `col_empanelment_hospital_pincode`,
 `col_empanelment_contact_person`, `col_empanelment_contact_number`, `col_empanelment_email_id`, `col_empanelment_rohini_registration_number`, `col_upload_hospital_profile`, `col_select_the_TPA`)
 VALUES ('$txt_empanelment_hospital_name','$txt_empanelment_hospital_name','$txt_empanelment_hospital_address','$txt_empanelment_hospital_city','$txt_empanelment_hospital_state','$txt_empanelment_hospital_pincode',
 '$txt_empanelment_contact_person','$txt_empanelment_contact_number','$txt_empanelment_email_id','$txt_empanelment_rohini_reg_number','$txt_empanelment_profile','$txt_empanelment_TPA')";


if(mysqli_query($conn, $sql)){
    echo "<script type='text/javascript'>
alert('Your request has been raised successfully');
window.location.href = 'tpa_empanelment_request.php';
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