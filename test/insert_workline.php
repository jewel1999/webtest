<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_POST['workline_table'])){
        $workgroup_id = $_POST['workgroup_id'];
        $workline_id = $_POST['workline_id'];
        $workline_name = $_POST['workline_name'];
        


        if(!isset($_SESSION['error'])){
        try {
            $check_workline = $conn->prepare("SELECT workline_name FROM workline WHERE workline_name = :workline_name");   // : replace values
            $check_workline->bindParam(":workline_name",$workline_name);
            $check_workline->execute();
            $row = $check_workline->fetch(PDO::FETCH_ASSOC);

                $stmt = $conn->prepare("INSERT INTO workline (workgroup_id,workline_id,workline_name)
                                        VALUES (:workgroup_id,:workline_id,:workline_name)");
                $stmt->bindParam(":workgroup_id",$workgroup_id);
                $stmt->bindParam(":workline_id",$workline_id);
                $stmt->bindParam(":workline_name",$workline_name);
                $stmt->execute();
                $_SESSION['success'] = "workline data has been inserted sucessfully! " ;
                header("location: testdd.php");
            
            }catch(PDOException $e){    
            echo $e->getMessage();
        }
    }
}

?>