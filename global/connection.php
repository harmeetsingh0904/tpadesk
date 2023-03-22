<?php
function getPath($filename)
{
  echo $rootDir = $_SERVER['DOCUMENT_ROOT'];
  $path = null;

  foreach (INCLUDE_DIRS as $dir) {
    if (file_exists($path = $rootDir . $dir . $filename)) 
    return $path;
  }
  throw new Exception("Could not find $filename in any of the INCLUDE_DIRS directories");
}
?>


<?php
$tpa_helpdesk = "localhost";
$username = "root";
$password = "";
$dbname = "tpadesk";
// connection to database 
$conn = mysqli_connect($tpa_helpdesk, $username, $password, $dbname);

?>  <?php include_once('../global/all-sessions.php'); ?>
 
