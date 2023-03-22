<?php require_once '../global/connection.php';?>
<!DOCTYPE html>
<html>

<head>
    <title>Crendentials Data Page</title>
</head>

<body>
<?php

$username =_POST('username');
$password =_POST('password');

$sql="INSERT INTO `credentials login`(`username`, `password`) VALUES ('$username','$password')"

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