<?php
require_once('../global/connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add patient Data Page</title>
</head>

<body>
<?php
{    
     $first_name_add_patient = $_POST['first_name_add_patient'];
     $last_name_add_patient = $_POST['last_name_add_patient'];
     $mobile_number_add_patient = $_POST['mobile_number_add_patient'];
     $pictureupload_add_patient = $_POST['pictureupload_add_patient'];
     $date_of_birth_add_patient = $_POST['date_of_birth_add_patient'];
     $blood_group = $_POST['blood_group'];
     $sex_add_patient = $_POST['sex_add_patient'];
     $status = $_POST['status'];
     $address_add_paitent = $_POST['address_add_paitent'];
      
$sql= "INSERT INTO `Add_patient`(`col_first_name`, `col_last_name`, `col_mobile_number`, `col_picture_passportsize`, `col_DOB`, `col_blood_group`, `col_sex`, `col_status`, `col_address`) VALUES 
 ('$first_name_add_patient','$last_name_add_patient','$mobile_number_add_patient','$pictureupload_add_patient','$date_of_birth_add_patient','$blood_group','$sex_add_patient','$status','$address_add_paitent')";


if(mysqli_query($conn, $sql)){
    echo "<script type='text/javascript'>
alert('Your details has been added successfully');
window.location.href = 'add-patient.php';
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