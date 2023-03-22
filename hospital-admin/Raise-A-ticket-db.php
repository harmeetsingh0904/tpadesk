<?php
require_once('../global/connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Raise-A-ticket Data Page</title>
</head>

<body>
<?php
{    
     $txt_raise_hospital_name = $_POST['txt_raise_hospital_name'];
     $txt_raise_hospital_address = $_POST['txt_raise_hospital_address'];
     $txt_taise_city = $_POST['txt_taise_city'];
     $txt_raise_State = $_POST['txt_raise_State'];
     $txt_raise_Pincode = $_POST['txt_raise_Pincode'];
     $txt_raise_contact_person = $_POST['txt_raise_contact_person'];
     $txt_raise_contact_number = $_POST['txt_raise_contact_number'];
     $txt_raise_email_Id = $_POST['txt_raise_email_Id'];
     $txt_facing_issue = $_POST['txt_facing_issue'];
    
     
     
$sql= "INSERT INTO `Raise-a-ticket`(`col_patient_id`, `col_ticket_hospital_name`, `col_full_address_of_hospital`, `col_ticket_city`, `col_ticket_state`, `col_ticket_pincode`, `col_ticket_contact_person`, `col_ticket_contact_number`, `col_ticket_email_id`, `col_description_issue`)
 VALUES ('$txt_raise_hospital_name','$txt_raise_hospital_name','$txt_raise_hospital_address','$txt_taise_city','$txt_raise_State','$txt_raise_Pincode','$txt_raise_contact_person','$txt_raise_contact_number','$txt_raise_email_Id','$txt_facing_issue')";


if(mysqli_query($conn, $sql)){
    echo "<script type='text/javascript'>
alert('Your Ticket has been raised successfully.We regret for incovience');
window.location.href = 'raise_a_ticket.php';
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