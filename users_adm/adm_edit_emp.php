<?php 
    session_start();
    require_once "../connect_db.php"; 
  

    if(isset($_POST['adm_update'])){
        $st_id = $_POST['st_id'];
        $fname_thai = $_POST['fname_thai'];
        $lname_thai = $_POST['lname_thai'];
        $fname_eng = $_POST['fname_eng'];
        $lname_eng = $_POST['lname_eng'];
        $nickname = $_POST['nickname'];
        $extn  = $_POST['extn'];




        // echo 'st_id = ' . $st_id . '<br/>';
        // echo 'staff_id = ' . $staff_id . '<br/>';
        // echo 'fname_thai = ' . $fname_thai . '<br/>';
        // echo 'lname_thai = ' . $lname_thai . '<br/>';
        // echo 'fname_eng = ' . $fname_eng . '<br/>';
        // echo 'lname_eng = ' . $lname_eng . '<br/>';
        // echo 'nickname = ' . $nickname . '<br/>';
        // echo 'floor_ = ' . $floor_ . '<br/>';
        // echo 'extn = ' . $extn . '<br/>';
        // echo 'usermail = ' . $usermail . '<br/>';
        // echo 'phonenumber = ' . $phonenumber . '<br/>';
        // echo 'sex = ' . $sex . '<br/>';
        // echo 'workgroup_emp = ' . $workgroup_emp . '<br/>';
        // echo 'workline_emp = ' . $workline_emp . '<br/>';
        // echo 'department_thai = ' . $department_thai . '<br/>';
        // echo 'department_eng = ' . $department_eng . '<br/>';
        // echo 'status_staff = ' . $status_staff . '<br/>';
        // echo 'station = ' . $station . '<br/>';



                if(!isset($_SESSION['error'])){
                    $update_emp = $conn->prepare("UPDATE staffinfo 
                    SET 

                    fname_thai=:fname_thai,
                    lname_thai=:lname_thai,
                    fname_eng=:fname_eng,
                    lname_eng=:lname_eng,
                    nickname=:nickname,
                    extn=:extn  WHERE st_id=:st_id ");

                    $update_emp->bindParam(":st_id",$st_id);
                    $update_emp->bindParam(":fname_thai",$fname_thai);
                    $update_emp->bindParam(":lname_thai",$lname_thai);
                    $update_emp->bindParam(":fname_eng",$fname_eng);
                    $update_emp->bindParam(":lname_eng",$lname_eng);
                    $update_emp->bindParam(":nickname",$nickname);
                    $update_emp->bindParam(":extn",$extn);
                    $update_emp->execute();


                    // print_r($update_emp);



                    $_SESSION['success'] = "Update sucessfully! " ;
                    header("location:adm_page_emp.php");     
                }else {
                    $_SESSION['error'] = "Update unsucessfully! " ;
                     header("location:adm_page_emp.php");
                }
                 
        
        }

        ?>

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
            <form action="adm_edit_emp.php" method="post" enctype="multiplepart/form-data">
                <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT DISTINCT staffinfo.*,department.*,workline.*,workgroup.* FROM staffinfo 
                        LEFT JOIN department ON staffinfo.department_thai=department.id
                        LEFT JOIN  workline ON staffinfo.workline_emp=workline.workline_id
                        LEFT JOIN  workgroup ON staffinfo.workgroup_emp=workgroup.id  WHERE staffinfo.st_id=$id");
                        $stmt->execute();
                        $data = $stmt->fetch();


                    }
                ?>

            
            <div class="mb-3">
                <label  class="col-form-label">#ID</label>
                <input type="text" value="<?= $data['st_id']?>" class="form-control" name="st_id"  readonly >    
            </div>
            <div class="mb-3">
                <label for="fname_thai" class="col-form-label">ชื่อจริง (ภาษาไทย)</label>
                <input type="text" value="<?= $data['fname_thai']?>" class="form-control" name="fname_thai" readonly >
            </div>
            <div class="mb-3">
                <label for="lname_thai" class="col-form-label">นามสกุล (ภาษาไทย)</label>
                <input type="text" value="<?= $data['lname_thai']?>" class="form-control" name="lname_thai"  readonly>
            </div>
            <div class="mb-3">
                <label for="fname_eng" class="col-form-label">ชื่อจริง (ภาษาอังกฤษ)</label>
                <input type="text"  value="<?= $data['fname_eng']?>" class="form-control" name="fname_eng"  readonly>
            </div>

            <div class="mb-3">
                <label for="lname_eng" class="col-form-label">นามสกุล (ภาษาอังกฤษ)</label>
                <input type="text"  value="<?= $data['lname_eng']?>" class="form-control" name="lname_eng" readonly >
            </div>
            <div class="mb-3">
                <label for="nickname" class="col-form-label">ชื่อเล่น</label>
                <input type="text"  value="<?= $data['nickname']?>" class="form-control" name="nickname" readonly >
            </div>
            
           <div class="mb-3">
                <label for="extn" class="col-form-label">เบอร์ติดต่อภายใน</label>
                <input type="text"  value="<?= $data['extn']?>" class="form-control" name="extn">
            </div>
     
   
      
            <hr>
            

            <div class="modal-footer">
            <a type="button" class="btn btn-danger" href="adm_page_emp.php">Close</a>
            <button type="submit" name="adm_update" class="btn btn-success"  >Update</button>
        </div>
            </form>
           
        </div>
        
</body>
<?php include_once('script.php'); ?>


</html>
