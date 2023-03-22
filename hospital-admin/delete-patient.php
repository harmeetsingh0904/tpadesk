<?php
include('../global/connection.php');
$patienID =$_POST['Patientid'];
$deletetPatient="delete from patient_details  where col_patient_details_id ='$patienID'   ";
if (mysqli_query($conn,$deletetPatient))
{
    echo 1;
}
else{
    echo 0;
}

?>