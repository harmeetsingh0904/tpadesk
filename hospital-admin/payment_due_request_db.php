<?php
require_once('../global/connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Payment Due Request Data Page</title>
</head>

<body>
<?php
{    
     $txt_tpa_insurance_comapny = $_POST['txt_tpa_insurance_comapny'];
     $txt_final_approved_amount = $_POST['txt_final_approved_amount'];
     $txt_total_due_amount = $_POST['txt_total_due_amount'];
     $txt_final_approval_letter = $_POST['txt_final_approval_letter'];
      
$sql= "INSERT INTO `payment_due_request`(`col_patient_id`, `col_tpa_insurance_company`, `col_final_approved_amount`, `col_payment_due_amount`, `col_final_approval_letter`)
 VALUES ('$txt_tpa_insurance_comapny','$txt_tpa_insurance_comapny','$txt_final_approved_amount','$txt_total_due_amount','$txt_final_approval_letter')";


if(mysqli_query($conn, $sql)){
    echo "<script type='text/javascript'>
alert('Your request has been raised successfully');
window.location.href = 'payment_due_request.php';
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