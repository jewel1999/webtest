<?php 
    session_start();
    require_once "../connect_db.php";

<<<<<<< HEAD
=======
    if(isset($_POST['com_insert'])){
        $com_sn = $_POST['com_sn'];
        $com_name = $_POST['com_name'];
        $com_owner = $_POST['com_owner'];
        $com_status  = $_POST['com_status'];
        $cpu =$_POST['cpu'];
        $ram =$_POST['harddisk'];
        $brand =$_POST['brand'];
        $model =$_POST['model'];
        $license =$_POST['$license'];
        $com_type = $_POST['com_type'];
}
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
        
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
           
<<<<<<< HEAD
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
=======
            <a href="admin_com.php" class="text-primary"> back </a>
            <div class="container position-absolute top-50 start-50 ">
                
            <table class=" translate-middle table table-bordered border-primary ">
                        <tr>
                            <th>#id</th>
                            <td><?php echo $data['id']; ?></td>

                        </tr>
                            <th>Computer serial-number </th>
                            <td><?php echo $data['com_sn']; ?></td>

                        <tr>
                            <th>Computer name </th>
                            <td><?php echo $data['com_name']; ?></td>
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
                        </tr>

                        <tr>
                            <th>Owner</th>
<<<<<<< HEAD
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
=======
                            <td><?php echo $data['com_owner']; ?></td>
                        </tr>
                        <tr>
                            <th>Computer type </th>
                            <td><?php echo $data['com_type']; ?></td>
                        </tr>
                        <tr>
                            <th>CPU</th>
                            <td><?php echo $data['cpu']; ?></td>
                        </tr>
                        <tr>
                            <th>RAM</th>
                            <td><?php echo $data['ram']; ?></td>
                        </tr>
                        <tr>
                            <th>Harddisk </th>
                            <td><?php echo $data['harddisk']; ?></td>
                        </tr>
                        <tr>
                            <th>Brand</th>
                            <td><?php echo $data['brand']; ?></td>
                        </tr>
                        <tr>
                            <th>Computer Model</th>
                            <td><?php echo $data['modelcom']; ?></td>
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
                        </tr>

                        <tr>
                            <th>License</th>
<<<<<<< HEAD
                            <td>&emsp;&emsp;<?php echo $data['license']; ?></td>
=======
                            <td><?php echo $data['license']; ?></td>
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
                        </tr>
                        
                        <tr>
                            <th>Price</th>
<<<<<<< HEAD
                            <td>&emsp;&emsp;<?php echo $data['price']; ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>&emsp;&emsp;<?php echo $data['com_status']; ?></td>
=======
                            <td><?php echo $data['price']; ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?php echo $data['com_status']; ?></td>
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
                        </tr>

                    </table>
                    </div>
    <!-- show modal started-->

</body>



