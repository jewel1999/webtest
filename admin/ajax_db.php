<?php
include_once("../connect_db.php");

 //++++ update staff info part ++++//

if (isset($_POST['function']) && $_POST['function'] == 'provinces') {
  $id = $_POST['id'];
  $sql = "SELECT * FROM workline WHERE workgroup_id='$id'";
  $query = $conn->prepare($sql);
  $query->execute();
  // $query = mysqli_query($con, $sql);
  echo '<option value="" selected disabled>-กรุณาเลือก Workline-</option>';
  foreach ($query as $value) {
    echo '<option value="' . $value['workgroup_id'] .'">' . $value['workline_name'] . '</option>';
  }
  
}

if (isset($_POST['function']) && $_POST['function'] == 'amphures') {
  $id = $_POST['id'];
  $sql = "SELECT * FROM department WHERE workline_id='$id'";
  $query = $conn->prepare($sql);
  $query->execute();
  // $query = mysqli_query($con, $sql);
  echo '<option value="" selected disabled>-กรุณาเลือก Department-</option>';
  foreach ($query as $value2) {
    echo '<option value="' . $value2['workline_id'] . '">' . $value2['department_thai'] . '</option>';
  }
  
}

if (isset($_POST['function']) && $_POST['function'] == 'districts') {
  $id = $_POST['id'];
  $sql = "SELECT * FROM department WHERE department_id='$id'";
  $query3 = mysqli_query($con, $sql);
  $result = mysqli_fetch_assoc($query3);
  echo $result['department_eng'];
  exit();
}


 //++++++++++++++++++ insert staff info part +++++++++++++++++++++++++++//

if (isset($_POST['function']) && $_POST['function'] == 'provinces2') {
  $id = $_POST['id'];
  $sql = "SELECT * FROM workline WHERE workgroup_id='$id'";
  $query = $conn->prepare($sql);
  $query->execute();
  // $query = mysqli_query($con, $sql);
  echo '<option value="" selected disabled>-กรุณาเลือก Workline-</option>';
  foreach ($query as $value) {
    echo '<option value="' . $value['workgroup_id'] .'">' . $value['workline_name'] . '</option>';
  }
  
}

if (isset($_POST['function']) && $_POST['function'] == 'amphures2') {
  $id = $_POST['id'];
  $sql = "SELECT * FROM department WHERE workline_id='$id'";
  $query = $conn->prepare($sql);
  $query->execute();
  // $query = mysqli_query($con, $sql);
  echo '<option value="" selected disabled>-กรุณาเลือก Department-</option>';
  foreach ($query as $value2) {
    echo '<option value="' . $value2['workline_id'] . '">' . $value2['department_thai'] . '</option>';
  }
  
}




