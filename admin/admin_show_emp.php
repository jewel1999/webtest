<?php 
    session_start();
    require_once "../connect_db.php";
<<<<<<< HEAD


        
        /* ------end of update section ------- */

=======
    if(isset($_POST['emp_update'])){
        $id = $_POST['id'];
        $employee_id = $_POST['employee_id'];
        $fname_thai = $_POST['fname_thai'];
        $lname_thai = $_POST['lname_thai'];
        $fname_eng = $_POST['fname_eng'];
        $lname_eng = $_POST['lname_eng'];
        $nickname = $_POST['nickname'];
        $floor  = $_POST['floor'];
        $extn  = $_POST['extn'];
        $usermail  = $_POST['usermail'];
        $phone  = $_POST['phone'];
        $sex  = $_POST['sex'];
        $workgroup  = $_POST['workgroup'];
        $workline  = $_POST['workline'];
        $department  = $_POST['department'];
        $department_eng  = $_POST['department_eng'];
        $user_status  = $_POST['user_status'];
        $station  = $_POST['station'];


                
                if(!isset($_SESSION['error'])){
                    $sql = $conn->prepare("UPDATE employees SET 
                    employee_id=:employee_id,
                    fname_thai=:fname_thai,
                    lname_thai=:lname_thai,
                    fname_eng=:fname_eng,
                    lname_eng=:lname_eng,
                    nickname=:nickname,
                    floor_=:floor_,
                    extn=:extn,
                    usermail=:usermail,
                    phone=:phone,
                    sex=:sex,
                    workgroup=:workgroup,
                    workline=:workline,
                    department=:department,
                    department_eng=:department_eng,
                    status_user=:status_user,
                    station=:station 
                    WHERE id=:id ");
                    $sql->bindParam(":id",$id);
                    $sql->bindParam(":employee_id",$employee_id);
                    $sql->bindParam(":fname_thai",$fname_thai);
                    $sql->bindParam(":lname_thai",$lname_thai);
                    $sql->bindParam(":fname_eng",$fname_eng);
                    $sql->bindParam(":lname_eng",$lname_eng);
                    $sql->bindParam(":nickname",$nickname);
                    $sql->bindParam(":floor_",$floor_);
                    $sql->bindParam(":extn",$extn);
                    $sql->bindParam(":usermail",$usermail);
                    $sql->bindParam(":phone",$phone);
                    $sql->bindParam(":sex",$sex);
                    $sql->bindParam(":workgroup",$workgroup);
                    $sql->bindParam(":workline",$workline);
                    $sql->bindParam(":department",$department);
                    $sql->bindParam(":department_eng",$department_eng);
                    $sql->bindParam(":user_status",$user_status);
                    $sql->bindParam(":station",$station);
                    $sql->execute();
                    

                    $_SESSION['success'] = "Update sucessfully! " ;
                    // header("location:admin_emp.php");     
                }else {
                    $_SESSION['error'] = "Update unsucessfully! " ;
                    // header("location:admin_emp.php");
                }
                 
        
        }
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Computers edit : admin</title>
=======
    <title>Employee edit : admin</title>
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .container{
<<<<<<< HEAD
            max-width:1000px;
=======
            max-width:700px;
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
        }
    </style>

</head>
<body>
<<<<<<< HEAD
<?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                       
                        
                        $stmt = $conn->query("SELECT staffinfo.*,department.*,workline.*,workgroup.* FROM staffinfo 
                        LEFT JOIN department ON staffinfo.department_thai=department.id
                        LEFT JOIN  workline ON staffinfo.workline_emp=workline.id
                        LEFT JOIN  workgroup ON staffinfo.workgroup_emp=workgroup.id  WHERE staffinfo.st_id=$id");
=======

  <div class="container mt-6"> 
        <div class="modal-body">  
            <form action="admin_show_emp.php" method="post" enctype="multiplepart/form-data">
                <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM employees WHERE id = $id");
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>
<<<<<<< HEAD
  
            <!-- show modal-showmore started-->
           
            <a href="admin_emp.php" class="mt-4 btn btn-warning position-absolute top-0 start-50 translate-middle "> ย้อนกลับ </a>
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



=======

            <div class="mb-3">
                <label for="id" class="col-form-label">employee #id</label>
                <input readonly type="text" value="<?= $data['id']?>" class="form-control" name="id">
            </div>    

            <div class="mb-3">
                <label for="employee_id" class="col-form-label">employee #id</label>
                <input readonly type="text" value="<?= $data['employee_id']?>" class="form-control" name="employee_id">
            </div>
            
            <div class="mb-3">
                <label for="fname_thai" class="col-form-label">ชื่อจริง (ภาษาไทย)</label>
                <input readonly  type="text" value="<?= $data['fname_thai']?>" class="form-control" name="fname_thai">
            </div>
            
            <div class="mb-3">
                <label for="lname_thai" class="col-form-label">นามสกุล (ภาษาไทย)</label>
                <input readonly  type="text" value="<?= $data['lname_thai']?>" class="form-control" name="lname_thai">
            </div>
            
            <div class="mb-3">
                <label for="fname_eng" class="col-form-label">ชื่อ (ภาษาอังกฤษ)</label>
                <input readonly  type="text" value="<?= $data['fname_eng']?>" class="form-control" name="fname_eng">
            </div>

            <div class="mb-3">
                <label for="lname_eng" class="col-form-label">นามสกุล (ภาษาอังกฤษ)</label>
                <input readonly  type="text" value="<?= $data['lname_eng']?>" class="form-control" name="lname_eng">
            </div>
            
            <div class="mb-3">
                <label for="nickname" class="col-form-label">ชื่อเล่น</label>
                <input readonly  type="text" value="<?= $data['nickname']?>" class="form-control" name="nickname">
            </div>
            
            <div class="mb-3">
                <label for="floor_" class="col-form-label">floor</label>
                <input readonly  type="text" value="<?= $data['floor_']?>" class="form-control" name="floor_">
            </div>
            
            <div class="mb-3">
                <label for="extn" class="col-form-label">เบอร์ติดต่อภายใน</label>
                <input readonly  type="text" value="<?= $data['extn']?>" class="form-control" name="extn">
            </div>
            
            <div class="mb-3">
                <label for="usermail" class="col-form-label">อีเมลล์ผู้ใช้งาน</label>
                <input readonly  type="text" value="<?= $data['usermail']?>" class="form-control" name="usermail">
            </div>
            
            <div class="mb-3">
                <label for="phone" class="col-form-label">เบอร์โทรติดต่อ</label>
                <input readonly type="text" value="<?= $data['phone']?>" class="form-control" name="phone">
            </div>
            <div class="mb-3">
                <label for="sex" class="col-form-label">เพศ</label>
                <input readonly  type="text" value="<?= $data['sex']?>" class="form-control" name="sex">
            </div>
            <div class="mb-3">
                <label for="workgroup" class="col-form-label">ส่วนการทำงาน (workgroup)</label>
                <input readonly  type="text" value="<?= $data['workgroup']?>" class="form-control" name="workgroup">
            </div>
           
            <div class="mb-3">
                <label for="workline" class="col-form-label">สายการทำงาน (workline)</label>
                <input readonly  type="text" value="<?= $data['workline']?>" class="form-control" name="workline">
            </div>
            
            <div class="mb-3">
                <label for="department" class="col-form-label">แผนก</label>
                <input readonly  type="text"  value="<?= $data['department']?>" class="form-control" name="department">
            </div>

            <div class="mb-3">
                <label for="department_eng" class="col-form-label">แผนก (ภาษาอังกฤษ)</label>
                <input readonly  type="text"  value="<?= $data['department_eng']?>" class="form-control" name="department_eng">
            </div>

            <div class="mb-3">
                <label for="status_user" class="col-form-label">สถานะพนักงาน</label>
                <input readonly  type="text"  value="<?= $data['status_user']?>" class="form-control" name="status_user">
            </div>

            <div class="mb-3">
                <label for="station" class="col-form-label">station</label>
                <input readonly  type="text"  value="<?= $data['station']?>" class="form-control" name="station">
            </div>
                    
            <hr>
            
            <div class="modal-footer">
            <a type="button" class="btn btn-danger" href="admin_emp.php">Close</a>
        </div>
            </form>
           
        </div>
      
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
