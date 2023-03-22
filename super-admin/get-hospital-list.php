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
  $selecQuery= "SELECT * FROM `hospital_registration_form`";
  $result = mysqli_query($conn, $selecQuery);
  echo ' <table class="table table-bordered table-hover">

<thead class="success">
<tr>
    <th>Hospital UID</th>
    <th>Hospital Name</th>
    <th>User </th>
   
    <th>Update
    </th>

</tr>
</thead>';

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {

      echo '   <tr>
      <td>
          000' . $row['col_hospital_registration_form_id'] . '
      </td>
      <td>
          ' . $row['col_name_of_the_hospital'] . '
      </td>
      <td>
      ' . $row['col_username'] . '
  </td>
  

<td>
                                    <button data-id=' . $row['col_hospital_registration_form_id'] . ' class="delete-btn btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                    <button  data-id=' . $row['col_hospital_registration_form_id'] . '  class="delete-btn btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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