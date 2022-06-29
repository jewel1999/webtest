<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_POST['com_update'])){
        $com_sn = $_POST['com_sn'];
        $com_name = $_POST['com_name'];
        $com_owner = $_POST['com_owner'];
        $com_status  = $_POST['com_status'];
        $cpu =$_POST['cpu'];
        $ram =$_POST['harddisk'];
        $brand =$_POST['brand'];
        $modelcom =$_POST['modelcom'];
        $price =$_POST['price'];
        $license =$_POST['license'];
        $com_type = $_POST['com_type'];
    
                if(!isset($_SESSION['error'])){
                    $sql = $conn->prepare("UPDATE computers SET com_sn=:com_sn,com_name=:com_name,cpu=:cpu,
                    harddisk=:harddisk,modelcom=:modelcom,brand=:brand,license=:license,com_type=:com_type,price=:price,
                    com_owner=:com_owner,com_status=:com_status WHERE id=:id ");
                   $sql->bindParam(":com_sn",$com_sn);
                   $sql->bindParam(":com_name",$com_name);
                   $sql->bindParam(":com_owner",$com_owner);
                   $sql->bindParam(":com_status",$com_status);
                   $sql->bindParam(":cpu",$cpu);
                   $sql->bindParam(":harddisk",$harddisk);
                   $sql->bindParam(":modelcom",$modelcom);
                   $sql->bindParam(":brand",$brand);
                   $sql->bindParam(":license",$license);
                   $sql->bindParam(":price",$price);
                   $sql->bindParam(":com_type",$com_type);
                   $sql->execute();
                 

                    $_SESSION['success'] = "Update sucessfully! " ;
                    header("location:admin_com.php");     
                }else {
                    $_SESSION['error'] = "Update unsucessfully! " ;
                    header("location:admin_com.php");
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
            max-width:550px;
        }
    </style>

</head>
<body>

  <div class="container mt-6"> 
        <div class="modal-body">  <-- insert into data forms  -->   
            <form action="admin_edit_com.php" method="post" enctype="multiplepart/form-data">
                <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM computers WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>

            
            <div class="mb-3">
                <label  class="col-form-label">Compuster id :</label>
                <input type="text" readonly value="<?= $data['id']?>" class="form-control" name="id">    
            </div>
            <div class="mb-3">
                <label for="com_sn" class="col-form-label">Compuster serial-number :</label>
                <input type="text" value="<?= $data['com_sn']?>" class="form-control" name="com_sn">
            </div>
            <div class="mb-3">
                <label for="com_name" class="col-form-label">Compuster name :</label>
                <input type="text" value="<?= $data['com_name']?>" class="form-control" name="com_name">
            </div>
            <div class="mb-3">
                <label for="com_owner" class="col-form-label">Compuster owner :</label>
                <input type="text" value="<?= $data['com_owner']?>" class="form-control" name="com_owner">
            </div>
            <div class="mb-3">
                <label for="cpu" class="col-form-label">CPU </label>
                <input type="text"  value="<?= $data['cpu']?>" class="form-control" name="cpu">
            </div>

            <div class="mb-3">
                <label for="ram" class="col-form-label">RAM</label>
                <input type="text"  value="<?= $data['ram']?>" class="form-control" name="ram">
            </div>
            <div class="mb-3">
                <label for="harddisk" class="col-form-label">Harddisk</label>
                <input type="text"  value="<?= $data['harddisk']?>" class="form-control" name="harddisk">
            </div>
            <div class="mb-3">
                <label for="brand" class="col-form-label">Brand</label>
                <input type="text"  value="<?= $data['brand']?>" class="form-control" name="brand">
            </div>

            <div class="mb-3">
                <label for="modelcom" class="col-form-label">Model</label>
                <input type="text"  value="<?= $data['modelcom']?>" class="form-control" name="modelcom">
            </div>

            <div class="mb-3">
                <label for="license" class="col-form-label">License</label>
                <input type="text"  value="<?= $data['license']?>" class="form-control" name="license">
            </div>

            <div class="mb-3">
                <label for="price" class="col-form-label">Price</label>
                <input type="text"  value="<?= $data['price']?>" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label for="com_type" class="col-form-label">Computer type</label>
                <select class="form-select" id="inputGroupSelect01" name="com_type"  
                value="<?= $data['com_type']?>" >
                    <option selected>select type</option>
                    <option value="all-in-one">all-in-one</option>
                    <option value="pc-laptop">pc-laptop</option>
                    <option value="notebook">notebook</option>
                </select>
                
            </div>
            <div class="mb-3">
                <label for="com_status" class="col-form-label">Status :</label>
                <select class="form-select" id="inputGroupSelect01" name="com_status">
                    <option selected><?= $data['com_status']?></option>
                    <option value="active">active</option>
                    <option value="empty">empty</option>
                </select>
            </div>

            <div class="modal-footer">
            <a type="button" class="btn btn-danger" href="admin_com.php">Close</a>
            <button type="submit" name="com_update" class="btn btn-success"  >Update</button>
        </div>
            </form>
           
        </div>
      
</body>



