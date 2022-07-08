<?php 
    session_start();
    require_once "../connect_db.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printer Details</title>
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
                        $stmt = $conn->query("SELECT printers.*,department.* FROM printers
                        LEFT JOIN department ON printers.printer_owner=department.id WHERE printers.id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>

            <a href="admin_printer.php" class="mt-4 btn btn-warning position-absolute top-0 start-50 translate-middle "> ย้อนกลับ </a>
            <div class="container position-absolute top-50 start-50 ">
                
            <table class="table ">
            <div class="container position-absolute top-50 start-50 ">
                
            <table class=" translate-middle">
                        <tr>
                            <th>#id</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['id'] ?></td>

                        </tr>

                        <tr>
                            <th>ชื่อเครื่องพิมพ์</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['rn_dn']; ?></td>

                        </tr>

                        <tr>
                            <th>หมายเลขเครื่องพิมพ์</th>
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