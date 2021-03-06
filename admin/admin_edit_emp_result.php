<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_POST['emp_update'])){
        $id = $_POST['id'];    
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

                if(!isset($_SESSION['error'])){
                    $update_emp = $conn->prepare("UPDATE employees 
                    SET employee_id=:employee_id,
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

                    $update_emp->bindParam(":id",$id);
                    $update_emp->bindParam(":employee_id",$employee_id);
                    $update_emp->bindParam(":fname_thai",$fname_thai);
                    $update_emp->bindParam(":lname_thai",$lname_thai);
                    $update_emp->bindParam(":fname_eng",$fname_eng);
                    $update_emp->bindParam(":lname_eng",$lname_eng);
                    $update_emp->bindParam(":nickname",$nickname);
                    $update_emp->bindParam(":floor_",$floor_);
                    $update_emp->bindParam(":extn",$extn);
                    $update_emp->bindParam(":usermail",$usermail);
                    $update_emp->bindParam(":phone",$phone);
                    $update_emp->bindParam(":sex",$sex);
                    $update_emp->bindParam(":workgroup",$workgroup);
                    $update_emp->bindParam(":workline",$workline);
                    $update_emp->bindParam(":department",$department);
                    $update_emp->bindParam(":department_eng",$department_eng);
                    $update_emp->bindParam(":status_user",$status_user);
                    $update_emp->bindParam(":station",$station);
                    $update_emp->execute();



                    $_SESSION['success'] = "Update sucessfully! " ;
                    // header("location:admin_emp.php");     
                }else {
                    $_SESSION['error'] = "Update unsucessfully! " ;
                    // header("location:admin_emp.php");
                }
                 
        
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee edit : admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .container{
            max-width:700px;
        }
    </style>

</head>
<body>

  <div class="container mt-6"> 
        <div class="modal-body">  <!-- insert into data forms  -->   
            <form action="admin_edit_emp.php" method="post" enctype="multiplepart/form-data">
                <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM employees WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>

            <div class="mb-3">
                <label for="employee_id" class="col-form-label">employee #id</label>
                <input type="text" value="<?= $data['employee_id']?>" class="form-control" name="employee_id">
            </div>
            
            <div class="mb-3">
                <label for="fname_thai" class="col-form-label">???????????????????????? (?????????????????????)</label>
                <input type="text" value="<?= $data['fname_thai']?>" class="form-control" name="fname_thai">
            </div>
            
            <div class="mb-3">
                <label for="lname_thai" class="col-form-label">????????????????????? (?????????????????????)</label>
                <input type="text" value="<?= $data['lname_thai']?>" class="form-control" name="lname_thai">
            </div>
            
            <div class="mb-3">
                <label for="fname_eng" class="col-form-label">???????????? (??????????????????????????????)</label>
                <input type="text" value="<?= $data['fname_eng']?>" class="form-control" name="fname_eng">
            </div>

            <div class="mb-3">
                <label for="lname_eng" class="col-form-label">????????????????????? (??????????????????????????????)</label>
                <input type="text" value="<?= $data['lname_eng']?>" class="form-control" name="lname_eng">
            </div>
            
            <div class="mb-3">
                <label for="nickname" class="col-form-label">????????????????????????</label>
                <input type="text" value="<?= $data['nickname']?>" class="form-control" name="nickname">
            </div>
            
            <div class="mb-3">
                <label for="floor_" class="col-form-label">floor</label>
                <input type="text" value="<?= $data['floor_']?>" class="form-control" name="floor_">
            </div>
            
            <div class="mb-3">
                <label for="extn" class="col-form-label">????????????????????????????????????????????????</label>
                <input type="text" value="<?= $data['extn']?>" class="form-control" name="extn">
            </div>
            
            <div class="mb-3">
                <label for="usermail" class="col-form-label">????????????????????????????????????????????????</label>
                <input type="text" value="<?= $data['usermail']?>" class="form-control" name="usermail">
            </div>
            
            <div class="mb-3">
                <label for="phone" class="col-form-label">??????????????????????????????????????????</label>
                <input type="text" value="<?= $data['phone']?>" class="form-control" name="phone">
                
            </div>
            <div class="mb-3">
                <label for="sex" class="col-form-label">?????????</label>
                <input type="text" value="<?= $data['sex']?>" class="form-control" name="sex">
            </div>
            <div class="mb-3">
                <label for="workgroup" class="col-form-label">???????????????????????????????????? (workgroup)</label>
                <input type="text" value="<?= $data['workgroup']?>" class="form-control" name="workgroup">
            </div>
           
            <div class="mb-3">
                <label for="workline" class="col-form-label">????????????????????????????????? (workline)</label>
                <input type="text" value="<?= $data['workline']?>" class="form-control" name="workline">
            </div>
            
            <div class="mb-3">
                <label for="department" class="col-form-label">????????????</label>
                <input type="text"  value="<?= $data['department']?>" class="form-control" name="department">
            </div>

            <div class="mb-3">
                <label for="department_eng" class="col-form-label">???????????? (??????????????????????????????)</label>
                <input type="text"  value="<?= $data['department_eng']?>" class="form-control" name="department_eng">
            </div>

            <div class="mb-3">
                <label for="status_user" class="col-form-label">????????????????????????????????????</label>
                <input type="text"  value="<?= $data['status_user']?>" class="form-control" name="status_user">
            </div>

            <div class="mb-3">
                <label for="station" class="col-form-label">station</label>
                <input type="text"  value="<?= $data['station']?>" class="form-control" name="station">
            </div>
                    
            <hr>
            
            <div class="modal-footer">
            <a type="button" class="btn btn-danger" href="admin_emp.php">Close</a>
            <button type="submit" name="emp_update" class="btn btn-success"  >Update</button>
            
        </div>
            </form>
           
        </div>
</body>

