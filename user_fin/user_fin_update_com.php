<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_GET['com_insert'])){
        $com_sn = $_GET['com_sn'];
        $com_name = $_GET['com_name'];
        $com_owner = $_GET['com_owner'];
        $com_status  = $_GET['com_status'];}
        
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
<?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM computers WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>
  
            <!-- show modal-showmore started-->
            <div class="container position-absolute top-50 start-50 ">
            <table class=" translate-middle table table-bordered border-primary ">
                        <tr>
                            <th>#id</th>
                            <td><?php echo $data['id']; ?></td>

                        </tr>
                            <th>Computer name </th>
                            <td><?php echo $data['com_name']; ?></td>

                        <tr>
                            <th>Computer serial-number </th>
                            <td><?php echo $data['com_sn']; ?></td>
                        </tr>

                        <tr>
                            <th rowspan="2">Phone</th>
                            <td>123-45-678</td>
                        </tr>

                        <tr>
                            <td>212</td>
                        </tr>
                    </table>
                    </div>
    <!-- show modal started-->

</body>



