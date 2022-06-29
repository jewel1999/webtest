<?php
include_once("../connect_db.php");

if (isset($_POST['function']) && $_POST['function'] == 'provinces') {
  $id = $_POST['id'];
  $sql = "SELECT * FROM workline WHERE workline_id='$id'";
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
    echo '<option value="' . $value2['id'] . '">' . $value2['department_thai'] . '</option>';
  }
  
}

if (isset($_POST['function']) && $_POST['function'] == 'districts') {
  $id = $_POST['id'];
  $sql = "SELECT * FROM Drone_TB_Subdistrict WHERE Auto_Id='$id'";
  $query3 = $conn->prepare($sql);
  $query3->execute();
  $result = $query3->fetch(PDO::FETCH_ASSOC);

  echo $result['POST_CODE'];
  exit();
}






