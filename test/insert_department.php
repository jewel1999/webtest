<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_POST['department_table'])){
       
        $workline_id = $_POST['workline_id'];
        $department_id = $_POST['department_id'];
        $department_thai = $_POST['department_thai'];
        $department_eng = $_POST['department_eng'];
        


        if(!isset($_SESSION['error'])){
        try {
            $check_department = $conn->prepare("SELECT department_eng FROM department WHERE department_eng = :department_eng");   // : replace values
            $check_department->bindParam(":department_eng",$department_eng);
            $check_department->execute();
            $row = $check_department->fetch(PDO::FETCH_ASSOC);

                $stmt = $conn->prepare("INSERT INTO department (workline_id,department_id,department_thai,department_eng)
                                        VALUES (:workline_id,:department_id,:department_thai,:department_eng)");
                
                $stmt->bindParam(":workline_id",$workline_id);
                $stmt->bindParam(":department_id",$department_id);
                $stmt->bindParam(":department_thai",$department_thai);
                $stmt->bindParam(":department_eng",$department_eng);
                $stmt->execute();
                $_SESSION['success'] = "department data has been inserted sucessfully! " ;
                header("location: testdd.php");
            
            }catch(PDOException $e){    
            echo $e->getMessage();
        }
    }
}

?>