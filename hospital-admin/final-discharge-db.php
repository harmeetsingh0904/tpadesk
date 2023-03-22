<?php
require_once('../global/connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Final Discharge Data Page</title>
</head>

<body>
<?php
{    
     $final_billed_amount = $_POST['final_billed_amount'];
     $Initial_approved_amount = $_POST['Initial_approved_amount'];
     $Upload_final_discharge_documents = $_POST['Upload_final_discharge_documents'];
    
     
$sql= "INSERT INTO `Final_Discharge`(`col_patient_id`, `col_final_billed_amount`, `col_initial_approved_amount`, `col_upload_final_discharge_document`) VALUES ('$final_billed_amount','$final_billed_amount','$Initial_approved_amount','$Upload_final_discharge_documents')";


if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully.</h3>";
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