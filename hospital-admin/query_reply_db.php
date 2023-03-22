<?php
require_once('../global/connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Query Reply Data Page</title>
</head>

<body>
<?php
{    
     $Query_letter_number = $_POST['Query_letter_number'];
     $Upload_Query_Reply = $_POST['Upload_Query_Reply'];
     
$sql= "INSERT INTO `Query_Reply`( `col_patient_id`, `col_query_letter_number`, `col_upload_query_letterform`) VALUES ('$Query_letter_number','$Query_letter_number','$Upload_Query_Reply')";


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