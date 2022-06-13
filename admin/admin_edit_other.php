<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_POST['other_update'])){
        $id = $_POST['id'];
        $device_no = $_POST['device_no'];
        $device_name = $_POST['device_name'];
        $device_type = $_POST['device_type'];
        $device_status  = $_POST['device_status'];

                
                if(!isset($_SESSION['error'])){
                    $sql = $conn->prepare("UPDATE other_device SET device_no=:device_no,device_name=:device_name,
                    device_type=:device_type,device_status=:device_status WHERE id=:id ");
                    $sql->bindParam(":id",$id);
                    $sql->bindParam(":device_no",$device_no);
                    $sql->bindParam(":device_name",$device_name);
                    $sql->bindParam(":device_type",$device_type);
                    $sql->bindParam(":device_status",$device_status);
                    $sql->execute();

                    $_SESSION['success'] = "Update sucessfully! " ;
                    header("location:admin_other.php");     
                }else {
                    $_SESSION['error'] = "Update unsucessfully! " ;
                    header("location:admin_other.php");
                }       
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device edit : admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .container{
            max-width:550px;
        }
    </style>

</head>
<body>

  <div class="container mt-6"> 

        <!-- insert into data forms  -->   
        <div class="modal-body">  
            <form action="admin_edit_other.php" method="post" enctype="multiplepart/form-data">
                <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM other_device WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>

            
            <div class="mb-3">
                <label  class="col-form-label">#</label>
                <input type="text" readonly value="<?= $data['id']?>" class="form-control" name="id">    
            </div>
            <div class="mb-3">
                <label for="device_no" class="col-form-label">Device number :</label>
                <input type="text" value="<?= $data['device_no']?>" class="form-control" name="device_no">
            </div>
            <div class="mb-3">
                <label for="device_name" class="col-form-label">Device name :</label>
                <input type="text" value="<?= $data['device_name']?>" class="form-control" name="device_name">
            </div>
            <div class="mb-3">
                <label for="device_type" class="col-form-label">Device Type :</label>
                <input type="text" value="<?= $data['device_type']?>" class="form-control" name="device_type">
            </div>
            <div class="mb-3">
                <label for="device_status" class="col-form-label">Status :</label>
                <input type="text"  value="<?= $data['device_status']?>" class="form-control" name="device_status">
            </div>

            <div class="modal-footer">
            <a type="button" class="btn btn-secondary" href="admin_other.php">Close</a>
            <button type="submit" name="other_update" class="btn btn-success"  >Update</button>
        </div>
            </form>
           
        </div>
      