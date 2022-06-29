<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_POST['emp_insert'])){


        $employee_id = $_POST['employee_id'];
        $fname_thai = $_POST['fname_thai'];
        $lname_thai  = $_POST['lname_thai'];
        $fname_eng  = $_POST['fname_eng'];
        $lname_eng  = $_POST['lname_eng'];
        $nickname  = $_POST['nickname'];
        $floor_  = $_POST['floor_'];
        $extn  = $_POST['extn'];
        $usermail = $_POST['usermail'];
        $phone  = $_POST['phone'];
        $sex  = $_POST['sex'];
        $workgroup  = $_POST['workgroup'];
        $workline = $_POST['workline'];
        $department  = $_POST['department'];
        $department_eng  = $_POST['department_eng'];
        $station = $_POST['station'];
        $status_user = $_POST['status_user'];
  


        if(!isset($_SESSION['error'])){
        try {
            $check_com_sn = $conn->prepare("SELECT employee_id FROM employees WHERE employee_id = :employee_id");   // : replace values
            $check_com_sn->bindParam(":employee_id",$employee_id);
            $check_com_sn->execute();
            $row = $check_com_sn->fetch(PDO::FETCH_ASSOC);

                $stmt = $conn->prepare("INSERT INTO employees(employee_id,fname_thai,lname_thai,fname_eng,lname_eng,nickname,
                floor_,extn,usermail,phone,sex,workgroup,workline,department,department_eng,status_user,station)
                                        VALUES (:employee_id,:fname_thai,:lname_thai,:fname_eng,:lname_eng,:nickname,
                :floor_,:extn,:usermail,:phone,:sex,:workgroup,:workline,:department,:department_eng,:status_user,:station)");

                $stmt->bindParam(":employee_id",$employee_id);
                $stmt->bindParam(":fname_thai",$fname_thai);
                $stmt->bindParam(":lname_thai",$lname_thai);
                $stmt->bindParam(":fname_eng",$fname_eng);
                $stmt->bindParam(":lname_eng",$lname_eng);
                $stmt->bindParam(":nickname",$nickname);
                $stmt->bindParam(":floor_",$floor_);
                $stmt->bindParam(":extn",$extn);
                $stmt->bindParam(":usermail",$usermail);
                $stmt->bindParam(":phone",$phone);
                $stmt->bindParam(":sex",$sex);
                $stmt->bindParam(":workgroup",$workgroup);
                $stmt->bindParam(":workline",$workline);
                $stmt->bindParam(":department",$department);
                $stmt->bindParam(":department_eng",$department_eng);
                $stmt->bindParam(":status_user",$status_user);
                $stmt->bindParam(":station",$station);
                $stmt->execute();
                $_SESSION['success'] = "data has been inserted sucessfully! " ;
                header("location: admin_emp.php");
            
            }catch(PDOException $e){    
            echo $e->getMessage();
        }
    }
}

?>