<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_GET['emp_update'])){
        $id = $_GET['id'];    
        $employee_id = $_GET['employee_id'];
        $fname_thai = $_GET['fname_thai'];
        $lname_thai = $_GET['lname_thai'];
        $fname_eng = $_GET['fname_eng'];
        $lname_eng = $_GET['lname_eng'];
        $nickname = $_GET['nickname'];
        $floor_  = $_GET['floor_'];
        $extn  = $_GET['extn'];
        $usermail  = $_GET['usermail'];
        $phone  = $_GET['phone'];
        $sex  = $_GET['sex'];
        $workgroup  = $_GET['workgroup'];
        $workline  = $_GET['workline'];
        $department  = $_GET['department'];
        $department_eng  = $_GET['department_eng'];
        $status_user = $_GET['status_user'];
        $station  = $_GET['station'];}
        
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

        p {
            font-size: 14px;
        }
    </style>

</head>
<body>
<?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM employees WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>
  
            <!-- show modal-showmore started-->
            <div class="container ">
            <table class=" table table-bordered border-primary ">
                        <tr>
                            <th>#id</th>
                            <td><?php echo $data['id']; ?></td>

                        </tr>
                            <th>รหัสพนักงาน</th>
                            <td><?php echo $data['employee_id']; ?></td>

                        <tr>
                            <th>ชื่อ (ภาษาไทย) </th>
                            <td><?php echo $data['fname_thai']; ?></td>
                        </tr>
                        <tr>
                            <th>นามสกุล (ภาษาไทย) </th>
                            <td><?php echo $data['lname_thai']; ?></td>
                        </tr>
                        <tr>
                            <th>ชื่อ (ภาษาอังกฤษ)</th>
                            <td><?php echo $data['fname_eng']; ?></td>
                        </tr>
                        <tr>
                            <th>นามสกุล (ภาษาอังกฤษ) </th>
                            <td><?php echo $data['lname_eng']; ?></td>
                        </tr>
                        <tr>
                            <th>ชื่อเล่น</th>
                            <td><?php echo $data['nickname']; ?></td>
                        </tr>

                        <tr>
                            <th>เพศ</th>
                            <td><?php echo $data['sex']; ?></td>
                        </tr>
                        
                        <tr>
                            <th>เบอร์โทรศัพท์</th>
                            <td><?php echo $data['phone']; ?></td>
                        </tr>
                        <tr>
                            <th>เบอร์ติดต่อภายใน</th>
                            <td><?php echo $data['extn']; ?></td>
                        </tr>
                        <tr>
                            <th>อีเมลล์พนักงาน</th>
                            <td><?php echo $data['usermail']; ?></td>
                        </tr>
                        <tr>
                            <th>ส่วนการทำงาน</th>
                            <td><?php echo $data['workgroup']; ?></td>
                        </tr>
                        <tr>
                            <th>สายการทำงาน</th>
                            <td><?php echo $data['workline']; ?></td>
                        </tr>
                        <tr>
                            <th>แผนก </th>
                            <td><?php echo $data['department']; ?></td>
                        </tr>
                        <tr>
                            <th>แผนก (ภาษาอังกฤษ) </th>
                            <td><?php echo $data['department_eng']; ?></td>
                        </tr>
                        <tr>
                            <th>สถานะพนักงาน</th>
                            <td><?php echo $data['status_user']; ?></td>
                        </tr>
                        <tr>
                            <th>created time </th>
                            <td><?php echo $data['times']; ?></td>
                        </tr>
                    </table>
                    </div>
    <!-- show modal started-->

</body>



