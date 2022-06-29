<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_POST['workgroup_table'])){
        $workgroup_id = $_POST['workgroup_id'];
        $workgroup_name = $_POST['workgroup_name'];
        


        if(!isset($_SESSION['error'])){
        try {
            $check_workgroup = $conn->prepare("SELECT workgroup_name FROM workgroup WHERE workgroup_name = :workgroup_name");   // : replace values
            $check_workgroup->bindParam(":workgroup_name",$workgroup_name);
            $check_workgroup->execute();
            $row = $check_workgroup->fetch(PDO::FETCH_ASSOC);

                $stmt = $conn->prepare("INSERT INTO workgroup (workgroup_id,workgroup_name)
                                        VALUES (:workgroup_id,:workgroup_name)");
                $stmt->bindParam(":workgroup_id",$workgroup_id);
                $stmt->bindParam(":workgroup_name",$workgroup_name);
                $stmt->execute();
                $_SESSION['success'] = "workgroup data has been inserted sucessfully! " ;
                header("location: testdd.php");
            
            }catch(PDOException $e){    
            echo $e->getMessage();
        }
    }
}

?>