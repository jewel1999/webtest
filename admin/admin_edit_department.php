<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_POST['dep_update'])){
        $com_sn = $_POST['department_name'];
        $com_name = $_POST['workgroup'];
        $com_owner = $_POST['workline'];
       
    
                if(!isset($_SESSION['error'])){
                    $sql = $conn->prepare("UPDATE department SET department_name=:department_name
                    ,workgroup=:workgroup,workline=:workline  WHERE id=:id ");
                   $sql->bindParam(":department_name",$department_name);
                   $sql->bindParam(":workgroup",$workgroup);
                   $sql->bindParam(":workline",$workline); 
                   $sql->execute();
                 

                    $_SESSION['success'] = "Update sucessfully! " ;
                    header("location:admin_department.php");     
                }else {
                    $_SESSION['error'] = "Update unsucessfully! " ;
                    header("location:admin_department.php");
                }
                 
        
        }

        /* ------end of update section ------- */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computers edit : admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .container{
            max-width:700px;
        }
    </style>

</head>
<body>

  <div class="container mt-6"> 
        <div class="modal-body">  <-- insert into data forms  -->   
            <form action="admin_edit_department.php" method="post" enctype="multiplepart/form-data">
                <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM department WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>

            
            <div class="mb-3">
                <label  class="col-form-label">Compuster id :</label>
                <input type="text" readonly value="<?= $data['id']?>" class="form-control" name="id">    
            </div>
            <div class="mb-3">
                <label for="department_name" class="col-form-label"> department name </label>
                <input type="text" value="<?= $data['department_name']?>" class="form-control" name="department_name">
            </div>
            <div class="mb-3">
                <label for="workgroup" class="col-form-label">workgroup</label>
                <input type="text" value="<?= $data['workgroup']?>" class="form-control" name="workgroup">
            </div>
            <div class="mb-3">
                <label for="workline" class="col-form-label">workline</label>
                <input type="text" value="<?= $data['workline']?>" class="form-control" name="workline">
            </div>
           
            <div class="modal-footer">
            <a type="button" class="btn btn-danger" href="admin_department.php">Close</a>
            <button type="submit" name="dep_update" class="btn btn-success"  >Update</button>
        </div>
            </form>
           
        </div>
      
</body>



