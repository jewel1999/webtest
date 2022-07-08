<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_POST['rn_update'])){
        $id = $_POST['id'];
        $rn_dn = $_POST['rn_dn'];
        $rn_no = $_POST['rn_no'];
        $rn_date = $_POST['rn_date'];
        $rn_status  = $_POST['rn_status'];
        $rn_des = $_POST['rn_des'];

                
                if(!isset($_SESSION['error'])){
                    $sql = $conn->prepare("UPDATE repair_notices SET rn_dn=:rn_dn,rn_no=:rn_no,rn_date=:rn_date,
                    rn_status=:rn_status,rn_des=:rn_des WHERE id=:id ");
                    $sql->bindParam(":id",$id);
                    $sql->bindParam(":rn_dn",$rn_dn);
                    $sql->bindParam(":rn_no",$rn_no);
                    $sql->bindParam(":rn_date",$rn_date);
                    $sql->bindParam(":rn_status",$rn_status);
                    $sql->bindParam(":rn_des",$rn_des);
                    $sql->execute();

                    $_SESSION['success'] = "Update sucessfully! " ;
                    header("location:admin_rn.php");     
                }else {
                    $_SESSION['error'] = "Update unsucessfully! " ;
                    header("location:admin_rn.php");
                }
        }

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

           
                <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM repair_notices WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>

            <a href="admin_rn.php" class="mt-4 btn btn-warning position-absolute top-0 start-50 translate-middle "> ย้อนกลับ </a>
            <div class="container position-absolute top-50 start-50 ">
                
            <table class="table ">
            <div class="container position-absolute top-50 start-50 ">
                
            <table class=" translate-middle">
                        <tr>
                            <th>#id</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['id'] ?></td>

                        </tr>

                        <tr>
                            <th>Device name</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['rn_dn']; ?></td>

                        </tr>

                        <tr>
                            <th>Service no</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['rn_no']; ?></td>

                        </tr>

                        <tr>
                            <th>Service no</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['rn_no']; ?></td>
                        </tr>

                        <tr>
                            <th>Start date </th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['rn_date']; ?></td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['rn_status']; ?></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['rn_des']; ?></td>
                        </tr>

                </div>
           
        </div>