<?php 
    session_start();
    require_once '../connect_db.php';

                if(isset($_POST['emp_update'])){
                    $id =  $_POST['id'];
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



                if(!isset($_SESSION[''])){
                    $update_emp= $conn->prepare("UPDATE employees
                    INNER JOIN workgroup ON workgroup.workgroup_id = employees.workgroup
                    INNER JOIN workline ON workline.workline_id = employees.workline
                    INNER JOIN department ON department.department_id = employees.department
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

                    print_r($update_emp);

                    $_SESSION['success'] ="Update sucessfully! " ;
                    header("location:admin_emp.php");     
                }else {
                    $_SESSION['error']   ="Update unsucessfully! " ;
                    header("location:admin_emp.php");
                }
        }

?>
</body>