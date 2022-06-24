<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_POST['depline_insert'])){
        $workgroup_name = $_POST['workgroup_name'];
        $workline_name = $_POST['workline_name'];
        $department_name = $_POST['department_name'];
       

        if(!isset($_SESSION['error'])){
        try {
            $check_wg = $conn->prepare("SELECT workgroup_name FROM repair_notices WHERE workgroup_name = :workgroup_name");   // : replace values
            $check_wg->bindParam(":workgroup_name",$workgroup_name);
            $check_wg->execute();
            $row = $check_wg->fetch(PDO::FETCH_ASSOC);


            $insert_wg = $conn->prepare("INSERT INTO workgroup(workgroup_name) VALUES (:workgroup_name)");                        

            $insert_wl = $conn->prepare("INSERT INTO workline(workline_name)  VALUES (:workline_name)"); 

            $insert_dep = $conn->prepare("INSERT INTO department(department_name) VALUES (:department_name)");
                
                
               
               
                $stmt->bindParam(":workgroup_name",$workgroup_name);
                $stmt->bindParam(":workline_name",$workline_name);
                $stmt->bindParam(":department_name",$department_name);
                
                $stmt->execute();
                $_SESSION['success'] = "data has been inserted sucessfully! " ;
                header("location: testdd.php");
            
            }catch(PDOException $e){    
            echo $e->getMessage();
        }
    }
}

?>