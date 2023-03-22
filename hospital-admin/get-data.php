<?php
// left section for menu and all forms 
include_once('../global/connection.php');
include_once('../global/all-sessions.php');
echo $HopitalId;
?>
<?php 
//Get Hospital Name BY ID
$getHospitalname="SELECT * FROM `hospital_registration_form` WHERE col_hospital_registration_form_id = '$HopitalId' ";
$result =mysqli_query($conn,$getHospitalname);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
       echo $HospitalName= $row['col_name_of_the_hospital'];
    }

  } else {
    echo "0 results";
  }

?>