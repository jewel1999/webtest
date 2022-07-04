<?php 
    session_start();
    require_once "../connect_db.php";

    if(isset($_POST['emp_insert'])){
        $staff_id = $_POST['staff_id'];
        $fname_thai = $_POST['fname_thai'];
        $lname_thai = $_POST['lname_thai'];
        $fname_eng = $_POST['fname_eng'];
        $lname_eng  = $_POST['lname_eng'];
        $nickname =$_POST['nickname'];
        $sex =$_POST['sex'];
        $extn =$_POST['extn'];
        $floor_ =$_POST['floor_'];
        $usermail =$_POST['usermail'];
        $phonenumber =$_POST['phonenumber'];
        $workgroup_emp = $_POST['workgroup_emp'];
        $workline_emp = $_POST['workline_emp'];
        $department_thai = $_POST['department_thai'];
        $department_eng = $_POST['department_eng'];
        $status_staff = $_POST['status_staff'];
        $station = $_POST['station'];

        if(!isset($_SESSION['error'])){
        try {
            // $check_staff_id = $conn->prepare("SELECT staff_id FROM staffinfo WHERE staff_id = :staff_id");   // : replace values
            // $check_staff_id->bindParam(":staff_id",$staff_id);
            // $check_staff_id->execute();
            // $row = $check_staff_id->fetch(PDO::FETCH_ASSOC);

                $stmt = $conn->prepare("INSERT INTO staffinfo(staff_id,fname_thai,
                                        lname_thai,fname_eng,lname_eng,nickname,sex,
                                        floor_,extn,usermail,phonenumber,workgroup_emp,
                                        workline_emp,department_thai,department_eng,status_staff,station)
                                        
                                        VALUES (:staff_id,:fname_thai,:lname_thai,
                                        :fname_eng,:lname_eng,:nickname,:sex,
                                        :floor_,:extn,:usermail,:phonenumber,:workgroup_emp,:workline_emp,
                                        :department_thai,:department_eng,:status_staff,:station)");

                $stmt->bindParam(":staff_id",$staff_id);
                $stmt->bindParam(":fname_thai",$fname_thai);
                $stmt->bindParam(":lname_thai",$lname_thai);
                $stmt->bindParam(":fname_eng",$fname_eng);
                $stmt->bindParam(":lname_eng",$lname_eng);
                $stmt->bindParam(":nickname",$nickname);
                $stmt->bindParam(":sex",$sex);
                $stmt->bindParam(":floor_",$floor_);
                $stmt->bindParam(":extn",$extn);
                $stmt->bindParam(":usermail",$usermail);
                $stmt->bindParam(":phonenumber",$phonenumber);
                $stmt->bindParam(":workgroup_emp",$workgroup_emp);
                $stmt->bindParam(":workline_emp",$workline_emp);
                $stmt->bindParam(":department_thai",$department_thai);
                $stmt->bindParam(":department_eng",$department_eng);
                $stmt->bindParam(":status_staff",$status_staff);
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