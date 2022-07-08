<?php 
    session_start();
    require_once "../connect_db.php"; 
  

    if(isset($_POST['emp_update'])){
        $id = $_POST['id'];
        $staff_id = $_POST['staff_id'];
        $fname_thai = $_POST['fname_thai'];
        $lname_thai = $_POST['lname_thai'];
        $fname_eng = $_POST['fname_eng'];
        $lname_eng  = $_POST['lname_eng'];
        $nickname =$_POST['nickname'];
        $sex =$_POST['sex'];
        $floor_ =$_POST['floor_'];
        $extn =$_POST['extn'];
        $usermail =$_POST['usermail'];
        $phonenumber =$_POST['phonenumber'];
        $workgroup_emp = $_POST['workgroup_emp'];
        $workline_emp = $_POST['workline_emp'];
        $department_thai = $_POST['department_thai'];
        $department_eng = $_POST['department_eng'];
        $status_staff = $_POST['status_staff'];
        $station = $_POST['station'];

        echo $id  . '<br/>';
        echo  $staff_id . '<br/>';

    
                if(!isset($_SESSION['error'])){
                    $sql =$conn->prepare("UPDATE staffinfo SET staff_id=:staff_id,
                    fname_thai=:fname_thai,
                    lname_thai=:lname_thai,
                    fname_eng=:fname_eng,
                    lname_eng=:lname_eng,
                    nickname=:nickname,
                    sex=:sex,
                    floor_=:floor_,extn=:extn,
                    usermail=:usermail,phonenumber=:phonenumber,workgroup_emp=:workgroup_emp,workline_emp=:workline_emp,             
                    department_thai=:department_thai,department_eng=:department_eng,status_staff=:status_staff,
                    station=:station WHERE st_id=:id ");


                   $sql->bindParam(":id",$id);
                   $sql->bindParam(":staff_id",$staff_id);
                   $sql->bindParam(":fname_thai",$fname_thai);
                   $sql->bindParam(":lname_thai",$lname_thai);
                   $sql->bindParam(":fname_eng",$fname_eng);
                   $sql->bindParam(":lname_eng",$lname_eng);
                   $sql->bindParam(":nickname",$nickname);
                   $sql->bindParam(":sex",$sex);
                   $sql->bindParam(":floor_",$floor_);
                   $sql->bindParam(":extn",$extn);
                   $sql->bindParam(":usermail",$usermail);
                   $sql->bindParam(":phonenumber",$phonenumber);
                   $sql->bindParam(":workgroup_emp",$workgroup_emp);
                   $sql->bindParam(":workline_emp",$workline_emp);
                   $sql->bindParam(":department_thai",$department_thai);
                   $sql->bindParam(":department_eng",$department_eng);
                   $sql->bindParam(":status_staff",$status_staff);
                   $sql->bindParam(":station",$station);
                   $sql->execute();

                   print_r($sql);
                 

                    $_SESSION['success'] = "Update sucessfully! " ;
                    header("location:admin_emp.php");     
                }else {
                    $_SESSION['error'] = "Update unsucessfully! " ;
                    header("location:admin_emp.php");
                }
                 
        
        } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Staff information </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .container{
            max-width:700px;
        }
    </style>

</head>
<body>

  <div class="container mt-6"> 
        <div class="modal-body"> 
            <form action="admin_edit_emp.php" method="post" enctype="multiplepart/form-data">
                <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT staffinfo.*,department.*,workline.*,workgroup.* FROM staffinfo 
                        LEFT JOIN department ON staffinfo.department_thai=department.id
                        LEFT JOIN  workline ON staffinfo.workline_emp=workline.id
                        LEFT JOIN  workgroup ON staffinfo.workgroup_emp=workgroup.id  WHERE staffinfo.st_id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>

            
            <div class="mb-3">
                <label  class="col-form-label">#ID</label>
                <input type="text" value="<?= $data['st_id']?>" class="form-control" name="id"  readonly >    
            </div>
            <div class="mb-3">
                <label for="staff_id" class="col-form-label">Staff ID</label>
                <input type="text" value="<?= $data['staff_id']?>" class="form-control" name="staff_id">
            </div>
            <div class="mb-3">
                <label for="fname_thai" class="col-form-label">ชื่อจริง (ภาษาไทย)</label>
                <input type="text" value="<?= $data['fname_thai']?>" class="form-control" name="fname_thai">
            </div>
            <div class="mb-3">
                <label for="lname_thai" class="col-form-label">นามสกุล (ภาษาไทย)</label>
                <input type="text" value="<?= $data['lname_thai']?>" class="form-control" name="lname_thai">
            </div>
            <div class="mb-3">
                <label for="fname_eng" class="col-form-label">ชื่อจริง (ภาษาอังกฤษ)</label>
                <input type="text"  value="<?= $data['fname_eng']?>" class="form-control" name="fname_eng">
            </div>

            <div class="mb-3">
                <label for="lname_eng" class="col-form-label">นามสกุล (ภาษาอังกฤษ)</label>
                <input type="text"  value="<?= $data['lname_eng']?>" class="form-control" name="lname_eng">
            </div>
            <div class="mb-3">
                <label for="nickname" class="col-form-label">ชื่อเล่น</label>
                <input type="text"  value="<?= $data['nickname']?>" class="form-control" name="nickname">
            </div>
            
            <div class="mb-3">
                    <label for="sex" class="col-form-label">เพศ</label>
                    <select  value="<?= $data['sex']?>" name="sex"  class="form-select" aria-label="Default select example">
                        <option selected value=''> <?= $data['sex']?> </option>
                        <option value="Male">Male</option>  
                        <option value="Female">Female</option>  
                    </select>
           </div>
           <div class="mb-3">
                <label for="floor_" class="col-form-label">ชั้น</label>
                <input type="text"  value="<?= $data['floor_']?>" class="form-control" name="floor_">
            </div>
           <div class="mb-3">
                <label for="extn" class="col-form-label">เบอร์ติดต่อภายใน</label>
                <input type="text"  value="<?= $data['extn']?>" class="form-control" name="extn">
            </div>
            <div class="mb-3">
                <label for="phonenumber" class="col-form-label">เบอร์โทรศัพท์</label>
                <input type="text"  value="<?= $data['phonenumber']?>" class="form-control" name="phonenumber">
            </div>
            <div class="mb-3">
                <label for="usermail" class="col-form-label">Usermail</label>
                <input type="text"  value="<?= $data['usermail']?>" class="form-control" name="usermail">
            </div>


   
             <!-- Departmant line Dynamic dropdown-->
            <div>
            <label>Workgroup</label>
            <select  id="provinces" name="workgroup_emp" class="form-control" required >
            <option selected="selected" value=''> <?= $data['workgroup_name']?></option>
                <?php
                $province = "SELECT * from workgroup order by id ASC";
                $stmt = $conn->prepare($province);
                $stmt->execute();
                foreach ($stmt as $value) {
                ?>
                <option value="<?= $value['id'] ?>"><?= $value['workgroup_name']  ?></option>
                <?php } ?>
            </select>
            </div>

            <div class="mb-3">
                <label for="workline_emp" class="col-form-label">Workline</label>
                <select  id="amphures" name="workline_emp"class="form-control" required> </select>

            </div> <div class="mb-3">
                <label for="department_thai" class="col-form-label">Department</label>
                <select  id="districts" name="department_thai" class="form-control" required></select>
            </div>
                   
            

            <div class="mb-3">
                <label>Deprtment english</label>
                <select  value="<?= $data['department_eng'] ?>" id="department_eng" name="department_eng" class="form-control" required>
                        <option selected="selected" value=''> <?= $data['department_eng']?></option>
                        <?php
                        $province = "SELECT * from department order by id ASC";
                        $stmt = $conn->prepare($province);
                        $stmt->execute();
                        foreach ($stmt as $value) {
                        ?>
                        <option value="<?= $value['id'] ?>"><?= $value['department_eng'] ?></option>
                        <?php } ?>
                </select>
            </div>
            <!-- Departmant line Dynamic dropdown ended -->

            
            

            <div class="mb-3">
                    <label for="status_staff" class="col-form-label">สถานะพนักงาน</label>
                    <select  value="<?= $data['status_staff']?>" name="status_staff"  class="form-select" aria-label="Default select example">
                        <option selected value=''> <?= $data['status_staff']?> </option>
                        <option value="Active">Active</option>  
                        <option value="Empty">Empty</option>  
                    </select>
            </div>

            <div class="mb-3">
                    <label for="station" class="col-form-label">Station</label>
                    <select value="<?= $data['station']?>" name="station" class="form-select" aria-label="Default select example">
                        <option  selected value=''> <?= $data['station']?> </option>
                        <option value="headstation">Head station</option>  
                        <option value="branch">Branch</option>  
                    </select>
                    </div>
            <hr>
            

            <div class="modal-footer">
            <a type="button" class="btn btn-danger" href="admin_emp.php">Close</a>
            <button type="submit" name="emp_update" class="btn btn-success"  >Update</button>
        </div>
            </form>
           
        </div>
        
</body>
<?php include_once('script.php'); ?>


</html>
