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
            echo  $fname_thai . '<br/>';
            echo  $lname_thai . '<br/>';
            echo  $fname_eng . '<br/>';
            echo $lname_eng . '<br/>';
            echo $floor_. '<br/>';
            echo  $sex. '<br/>'; 
            echo $usermail . '<br/>';
            echo    $phonenumber . '<br/>';
            echo   $workgroup_emp. '<br/>';
            echo  $workline_emp  . '<br/>';
            echo  $department_thai. '<br/>';
            echo   $department_eng. '<br/>';
            echo    $status_staff . '<br/>';
            echo $station. '<br/>';

                if(!isset($_SESSION['error'])){
                    $sql =$conn->prepare("UPDATE staffinfo SET staff_id=:staff_id,
                    fname_thai=:fname_thai,
                    lname_thai=:lname_thai,
                    fname_eng=:fname_eng,
                    lname_eng=:lname_eng,
                    nickname=:nickname,
                    sex=:sex,floor_=:floor_,extn=:extn,
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
                 
        
        }

        /* ------end of update section ------- */


?>