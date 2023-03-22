
<?php 
//Get Projct Path
    $finalpath = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    $finalpath .=$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]);        
     $finalpath . '/';
?>