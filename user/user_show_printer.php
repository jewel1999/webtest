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
    <title>ข้อมูลเครื่องพิมพ์</title>
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
                        $stmt = $conn->query("SELECT * FROM printers WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>
            <!-- show modal-showmore started-->
           
            
            <a href="user_page_com.php" class="mt-4 btn btn-warning position-absolute top-0 start-50 translate-middle "> ย้อนกลับ </a>
            <div class="container position-absolute top-50 start-50 ">
                
            <table class="table ">
            <div class="container position-absolute top-50 start-50 ">
                
            <table class=" translate-middle">
                        <tr>
                            <th>#id</th>
                            <td><?php echo $data['id']; ?></td>

                        </tr>
                            <th>Printer serial-number </th>
                            <td><?php echo $data['printer_sn']; ?></td>

                        <tr>
                            <th>Printer name</th>
                            <td><?php echo $data['printer_name']; ?></td>
                        </tr>

                        <tr>
                            <th>Department</th>
                            <td><?php echo $data['printer_owner']; ?></td>
                        </tr>
                        <tr>
                            <th>สถานะการใช้งาน</th>
                            <td><?php echo $data['printer_status']; ?></td>
                        </tr>

                    </table>
                    </div>
    <!-- show modal started-->

</body>



