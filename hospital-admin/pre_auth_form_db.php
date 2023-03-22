<?php
require_once('../global/connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pre-auth-form Data Page</title>
</head>

<body>
<?php
{   
     $Name_of_Hospital = $_POST['Name_of_Hospital'];
     $TPA_Person_Name = $_POST['TPA_Person_Name'];
     $Addrerss_of_Hospital = $_POST['Addrerss_of_Hospital'];
     $TPA_Person_Mobile_Number = $_POST['TPA_Person_Mobile_Number'];
     $Name_of_Treating_Doctor = $_POST['Name_of_Treating_Doctor'];
     $Doctor_Registration_Number = $_POST['Doctor_Registration_Number'];
     $Hospital_Rohini_ID = $_POST['Hospital_Rohini_ID'];
     $Date_of_Admission = $_POST['Date_of_Admission'];
     $Date_of_Discharge = $_POST['Date_of_Discharge'];
     $Nature_of_illness = $_POST['Nature_of_illness'];
     $Past_history_of_present_ailment = $_POST['Past_history_of_present_ailment'];
     $Pre_auth_form = $_POST['Pre_auth_form'];
     $Breakup_Bill = $_POST['Breakup_Bill'];
     $Policy_copy = $_POST['Policy_copy'];
     
     
$sql= "INSERT INTO `Pre_Auth_Form`(`col_patient_id`,`col_name_of_hospital`, `col_addrerssofhospital`, `col_tpa_person_name`, `col_tpa_contact_number`, `col_doctor_name`, 
`col_doctor_registration_number`, `col_hospital_rohini_id`, `col_dateof_admission`, `col_dateof_discharge`, `col_natureof_illness`,`col_past_historyof_present_ailment`, 
`col_upload_pre_auth_form`, `col_upload_breakup_bill`, `col_upload_policy_copy`)
  VALUES ('$Name_of_Hospital','$Name_of_Hospital',' $TPA_Person_Name','$Addrerss_of_Hospital','$TPA_Person_Mobile_Number','$Name_of_Treating_Doctor','$Doctor_Registration_Number','$Hospital_Rohini_ID','$Date_of_Admission','$Date_of_Discharge',
  ' $Nature_of_illness','$Past_history_of_present_ailment','$Pre_auth_form ','$Breakup_Bill',' $Policy_copy')";

if(mysqli_query($conn, $sql)){
    echo "<h3>YOUR HOSPITAL HAS BEEN SUCESSFULLY REGISTERED WITH TPA DESK. PLEASE USE BELOW HOSPITAL CODE FOR FUTURE COMMUNICATIONS<br> <strong>HOSPITAL CODE:</strong> LAST 4 DIGIT OF ROHINI CODE </h3>";
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
} 
// Close connection
mysqli_close($conn);
}
?> 
</body>

</html>