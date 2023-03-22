<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pateint Details from ADD-patient.php</title>
</head>

<body>
  <?php
  include_once('../global/connection.php');
  include_once('../global/all-sessions.php');
  $selecTPA = "SELECT * FROM `tbl_tpa` ";
  $result = mysqli_query($conn, $selecTPA);
  echo ' <table class="table table-bordered table-hover">
<thead class="success">
<tr>
    <th>TPA Name</th>
    <th>Email</th>
    <th>Edit/Delete</th>


</tr>
</thead>';

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {

      echo '   <tr>
      <td>
          000' . $row['col_tpa_name'] . '
      </td>
      <td>
          ' . $row['col_tpa_email'] . '
      </td>
     
<td>
                                    <button data-id=' . $row['col_tpaM_id'] . ' class="delete-btn btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                    <button  data-id=' . $row['col_tpaM_id'] . '  class="delete-btn btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
    
  </tr>';
    }
  } else {
    echo "0 results";
  }
  echo "</table>";
  ?>

  <style>
    .delete-btn {}
  </style>
</body>

</html>