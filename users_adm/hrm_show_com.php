<?php 
    session_start();
    require_once "../connect_db.php";

        
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
            max-width:1000px;
        }
    </style>

</head>
<body>
<?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM computers WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>
  
            <!-- show modal-showmore started-->
           
            <a href="admin_com.php" class="mt-4 btn btn-warning position-absolute top-0 start-50 translate-middle "> ย้อนกลับ </a>
            <div class="container position-absolute top-50 start-50 ">
                
            <table class="table ">
            <div class="container position-absolute top-50 start-50 ">
                
            <table class=" translate-middle">


                        <tr>
                            <th>#id</th>
                            <td>&emsp;&emsp;<?php echo $data['id']; ?></td>

                        </tr>
                            <th>Computer serial-number </th>
                            <td>&emsp;&emsp;<?php echo $data['com_sn']; ?></td>

                        <tr>
                            <th>Computer name </th>
                            <td>&emsp;&emsp;<?php echo $data['com_name']; ?></td>
                        </tr>

                        <tr>
                            <th>Owner</th>
                            <td>&emsp;&emsp;<?php echo $data['com_owner']; ?></td>
                        </tr>
                        <tr>
                            <th>Computer type </th>
                            <td>&emsp;&emsp;<?php echo $data['com_type']; ?></td>
                        </tr>
                        <tr>
                            <th>CPU</th>
                            <td>&emsp;&emsp;<?php echo $data['cpu']; ?></td>
                        </tr>
                        <tr>
                            <th>RAM</th>
                            <td>&emsp;&emsp;<?php echo $data['ram']; ?></td>
                        </tr>
                        <tr>
                            <th>Harddisk </th>
                            <td>&emsp;&emsp;<?php echo $data['harddisk']; ?></td>
                        </tr>
                        <tr>
                            <th>Brand</th>
                            <td>&emsp;&emsp;<?php echo $data['brand']; ?></td>
                        </tr>
                        <tr>
                            <th>Computer Model</th>
                            <td>&emsp;&emsp;<?php echo $data['modelcom']; ?></td>
                        </tr>

                        <tr>
                            <th>License</th>
                            <td>&emsp;&emsp;<?php echo $data['license']; ?></td>
                        </tr>
                        
                        <tr>
                            <th>Price</th>
                            <td>&emsp;&emsp;<?php echo $data['price']; ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>&emsp;&emsp;<?php echo $data['com_status']; ?></td>
                        </tr>

                    </table>
                    </div>
    <!-- show modal started-->

</body>



