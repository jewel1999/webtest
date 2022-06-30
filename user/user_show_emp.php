<?php 
    session_start();
    require_once "../connect_db.php";

    if(isset($_POST['emp_insert'])){
        $employee_id = $_POST['employee_id'];
        $fname_thai = $_POST['fname_thai'];
        $lname_thai = $_POST['lname_thai'];
        $fname_eng = $_POST['fname_eng'];
        $lname_eng = $_POST['lname_eng'];
        $nickname = $_POST['nickname'];
        $floor_  = $_POST['floor_'];
        $extn  = $_POST['extn'];
        $usermail  = $_POST['usermail'];
        $phone  = $_POST['phone'];
        $sex  = $_POST['sex'];
        $workgroup  = $_POST['workgroup'];
        $workline  = $_POST['workline'];
        $department  = $_POST['department'];
        $department_eng  = $_POST['department_eng'];
        $status_user = $_POST['status_user'];
        $station  = $_POST['station'];

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

            <!-- show modal-showmore started-->
       
            <a href="user_emp.php" class="btn btn-warning"> back </a>

         
            
                
    <!-- show modal started-->
    <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM  WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>

<?php 
                $stmt =$conn->query("SELECT employees.*,department.*,workline.*,workgroup.* FROM employees 
                LEFT JOIN department ON employees.department=department.id
                LEFT JOIN  workline ON employees.workline=workline.id
                LEFT JOIN  workgroup ON employees.workgroup=workgroup.id  WHERE employees.id='11' "  );
                
                $stmt->execute(); 
              
                $users_table = $stmt->fetchALL();

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }else{
                    foreach  ($users_table as $users ) {   // foreach = loop data in table
            ?>
                    
                    <div class="contianer">
                        <table class="  border-primary ">
                        <tr>
                            <th>staff id</th>
                            <td><?php echo $users['employee_id']; ?></td>

                        </tr>
                            <th>ชื่อจริง (ภาษาไทย) </th>
                            <td><?php echo $users['fname_thai']; ?></td>

                        <tr>
                            <th>นามสกุล (ภาษาไทย)</th>
                            <td><?php echo $users['lname_thai']; ?></td>
                        </tr>

                        <tr>
                            <th>ชื่อ (ภาษาอังกฤษ)</th>
                            <td><?php echo $users['fname_eng']; ?></td>
                        </tr>
                        <tr>
                            <th>นามสกุล (ภาษาอังกฤษ)</th>
                            <td><?php echo $users['lname_eng']; ?></td>
                        </tr>
                        <tr>
                            <th>ชื่อเล่น</th>
                            <td><?php echo $users['nickname']; ?></td>
                        </tr>
                        <tr>
                            <th>ชั้น</th>
                            <td><?php echo $users['floor_']; ?></td>
                        </tr>
                        <tr>
                            <th>เบอร์ติดต่อ</th>
                            <td><?php echo $users['phone']; ?></td>
                        </tr>
                        <tr>
                            <th>เบอร์ติดต่อภายใน</th>
                            <td><?php echo $users['extn']; ?></td>
                        </tr>
                        <tr>
                            <th>อีเมลล์ผู้ใช้งาน</th>
                            <td><?php echo $users['usermail']; ?></td>
                        </tr>

                        <tr>
                            <th>ส่วนการทำงาน</th>
                            <td><?php echo $users['workgroup_name']; ?></td>
                        </tr>
                        
                        <tr>
                            <th>สายการทำงาน</th>
                            <td><?php echo $users['workline_name']; ?></td>
                        </tr>
                        <tr>
                            <th>แผนก</th>
                            <td><?php echo $users['department_thai']; ?></td>
                        </tr>
                        <tr>
                            <th>แผนก (ภาษาอังกฤษ)</th>
                            <td><?php echo $users['department_eng']; ?></td>
                        </tr>
                        <tr>
                            <th>สถานะพนักงาน </th>
                            <td><?php echo $users['status_user']; ?></td>
                        </tr>
                        <tr>
                            <th>station</th>
                            <td><?php echo $users['station']; ?></td>
                        </tr>

                    </table>
                    <?php }} ?>   
                    </div>
</body>