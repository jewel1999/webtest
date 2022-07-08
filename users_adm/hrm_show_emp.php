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

                        $stmt = $conn->query("SELECT staffinfo.*,department.*,workline.*,workgroup.* FROM staffinfo 
                        LEFT JOIN department ON staffinfo.department_thai=department.id
                        LEFT JOIN  workline ON staffinfo.workline_emp=workline.id
                        LEFT JOIN  workgroup ON staffinfo.workgroup_emp=workgroup.id  WHERE staffinfo.st_id=$id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>
  
            <!-- show modal-showmore started-->
           
            <a href="hrm_page_emp.php" class="mt-4 btn btn-warning position-absolute top-0 start-50 translate-middle "> ย้อนกลับ </a>
            <div class="container position-absolute top-50 start-50 ">
                
            <table class="table ">
            <div class="container position-absolute top-50 start-50 ">
                
            <table class=" translate-middle">
                        <tr>
                            <th>#id</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['st_id']; ?></td>

                        </tr>
                        <tr>
                            <th>รหัสพนักงาน</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['staff_id']; ?></td>

                        </tr>
                            <th>ชื่อจริง (ภาษาไทย)</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['fname_thai']; ?></td>

                        <tr>
                            <th>นามสกุล (ภาษาไทย)</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['lname_thai']; ?></td>
                        </tr>

                        <tr>
                            <th>ชื่อจริง (ภาษาอังกฤษ)</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['fname_eng']; ?></td>
                        </tr>
                        <tr>
                            <th>นามสกุล (ภาษาอังกฤษ)</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['lname_eng']; ?></td>
                        </tr>
                        <tr>
                            <th>ชื่อเล่น</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['nickname']; ?></td>
                        </tr>
                        <tr>
                            <th>เพศ</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['sex']; ?></td>
                        </tr>
                        <tr>
                            <th>ชั้น</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['floor_']; ?></td>
                        </tr>
                        <tr>
                            <th>เบอร์ติดต่อภายใน</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['extn']; ?></td>
                        </tr>

                        <tr>
                            <th>Usermail</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['usermail']; ?></td>
                        </tr>

                        <tr>
                            <th>กลุ่มงาน (Workgroup)</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['workgroup_name']; ?></td>
                        </tr>
                        <tr>
                            <th>สายงาน (Workline)</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['workline_name']; ?></td>
                        </tr>

                        <tr>
                            <th>แผนก</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['department_thai']; ?></td>
                        </tr>
                        
                        <tr>
                            <th>แผนก (ภาษาอังกฤษ)</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['department_eng']; ?></td>
                        </tr>

                        <tr>
                            <th>Station</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['station']; ?></td>
                        </tr>
                        <tr>
                            <th>สถานะพนักงาน</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['status_staff']; ?></td>
                        </tr>

                    </table>
                    </div>
          



    </body>



