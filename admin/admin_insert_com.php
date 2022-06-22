<?php 
    session_start();
    require_once "../connect_db.php";
    if(isset($_POST['com_insert'])){
        $com_sn = $_POST['com_sn'];
        $com_name = $_POST['com_name'];
        $com_owner = $_POST['com_owner'];
        $com_status  = $_POST['com_status'];
        $cpu =$_POST['cpu'];
        $ram =$_POST['harddisk'];
        $harddisk =$_POST['harddisk'];
        $brand =$_POST['brand'];
        $modelcom =$_POST['modelcom'];
        $license =$_POST['license'];
        $price =$_POST['price'];
        $com_type = $_POST['com_type'];

        if(!isset($_SESSION['error'])){
        try {
            $check_com_sn = $conn->prepare("SELECT com_sn FROM computers WHERE com_sn = :com_sn");   // : replace values
            $check_com_sn->bindParam(":com_sn",$com_sn);
            $check_com_sn->execute();
            $row = $check_com_sn->fetch(PDO::FETCH_ASSOC);

                $stmt = $conn->prepare("INSERT INTO computers(com_sn,com_name,com_owner,com_status,cpu,harddisk,modelcom,brand,license,com_type,price)
                                        VALUES (:com_sn,:com_name,:com_owner,:com_status,:cpu,:harddisk,:modelcom,:brand,:license,:com_type,:price)");
                $stmt->bindParam(":com_sn",$com_sn);
                $stmt->bindParam(":com_name",$com_name);
                $stmt->bindParam(":com_owner",$com_owner);
                $stmt->bindParam(":com_status",$com_status);
                $stmt->bindParam(":cpu",$cpu);
                $stmt->bindParam(":harddisk",$harddisk);
                $stmt->bindParam(":modelcom",$modelcom);
                $stmt->bindParam(":brand",$brand);
                $stmt->bindParam(":license",$license);
                $stmt->bindParam(":com_type",$com_type);
                $stmt->bindParam(":price",$price);
                $stmt->execute();
                $_SESSION['success'] = "data has been inserted sucessfully! " ;
                header("location: admin_com.php");
            
            }catch(PDOException $e){    
            echo $e->getMessage();
        }
    }
}

?>