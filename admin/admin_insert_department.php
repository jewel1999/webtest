<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_POST['dep_insert'])){
        $department_name = $_POST['department_name'];
        $workline = $_POST['workline'];
        $workgroup = $_POST['workgroup'];
        
        if(!isset($_SESSION['error'])){
        try {
            $check_com_sn = $conn->prepare("SELECT department_name FROM department WHERE department_name = :department_name");   // : replace values
            $check_com_sn->bindParam(":department_name",$department_name);
            $check_com_sn->execute();
            $row = $check_com_sn->fetch(PDO::FETCH_ASSOC);

                $stdp = $conn->prepare
                ("INSERT INTO department(department_name,workgroup,workline)
                                        VALUES (:department_name,:workgroup,:workline)");
                $stdp->bindParam(":department_name",$department_name);
                $stmt->bindParam(":workgroup",$workgroup);
                $stmt->bindParam(":workline",$workline);
                $stmt->execute();
                $_SESSION['success'] = "data has been inserted sucessfully! " ;
                header("location: admin_department.php");
            
            }catch(PDOException $e){    
            echo $e->getMessage();
        }
    }
}

?>

 <?php      /* $stdp = $conn->prepare("INSERT INTO department(department_name)
                                        VALUES (:department_name)");
            $stdp->bindParam(":department_name",$department_name);   

            $smwg = $conn->prepare("INSERT INTO workgroup (workgroup_name)
                                        VALUES (:workgroup_name)");
            $smwg ->bianParam(":workgroup_name",$workgroup_name);

            $smwl = $conn->prepare("INSERT INTO workline (workline_name)
                                        VALUES (:workline_name)");
                
            */  
 ?>