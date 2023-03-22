<?php
include('../global/all-sessions.php');
require_once('../global/connection.php');
?>

    <?php 
    {
        $TPAName = $_POST['TPANames'];
        $txtemailID = $_POST['txtemailIDs'];
        $insertTPA = "INSERT INTO `tbl_tpa`(`col_tpa_name`, `col_tpa_email`) VALUES ('$TPAName','$txtemailID')";
        if (mysqli_query($conn, $insertTPA)) 
            {
            echo 1;
            die;
        } else {
            echo 0;
            die;
        }
        mysqli_close($conn);
    }
    ?>


