<?php 
include ('../global/all-sessions.php');  
include_once('../global/connection.php');
?>
<?php
{    
     $P_name = $_POST['Patient_NameD'];
     $HopitalIdp = $_POST['HopitalIdD'];
     $Date_of_Birth = $_POST['DateofBirthD'];
     $Gender = $_POST['GenderD'];
     $Address_of_Patient = $_POST['AddressofPatientD'];
     $Patient_Mobile_Number = $_POST['Patient_Mobile_NumberD'];
     $Patient_Attendant_Name = $_POST['Patient_Attendant_NameD'];
     $Attendant_Contact_Number = $_POST['Attendant_Contact_NumberD'];
     $Name_of_insurance_Comapny = $_POST['Name_of_insurance_ComapnyD'];
     $Name_of_TPA = $_POST['Name_of_TPAD'];
     $Policy_Number = $_POST['Policy_NumberD'];
     $TPA_ID_card_Number = $_POST['TPA_ID_card_NumberD'];
     $Name_of_Corporate = $_POST['Name_of_CorporateD'];
     $Employee_ID = $_POST['Employee_IDD'];
  $insertPatient= "INSERT INTO `patient_details`( `col_pateint_name`,`col_hospital_id`, `col_date_of_birth`, `col_gender`, `col_address`, `col_patient_mobile_number`, `col_attendant_name`, `col_attentdant_mobile_number`, `col_name_insurance_company`, `col_name_of_tpa`, `col_policy_number`, `col_tpa_card_id`, `col_name_of_corporate`, `col_employee_id`) VALUES ('$P_name','$HopitalIdp','$Date_of_Birth','$Gender','$Address_of_Patient','$Patient_Mobile_Number','$Patient_Attendant_Name','$Attendant_Contact_Number','$Name_of_insurance_Comapny','$Name_of_TPA','$Policy_Number','$TPA_ID_card_Number','$Name_of_Corporate','$Employee_ID')";

 if (mysqli_query($conn, $insertPatient)) 
{
 echo 1;
 die;
} 
   else 
   {
     echo 0;
     die;
   }
 
mysqli_close($conn);
}
?> 
