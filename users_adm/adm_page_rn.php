<?php
    session_start();
    require_once '../connect_db.php';

    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $deletestmt = $conn->query("DELETE FROM repair_notices WHERE id = $delete_id");
        $deletestmt->execute();

        if($deletestmt){
            echo"<script> alert('data hasbeen deleted successfully ');  </script>";
            $_SESSION['success']="data has been deleted sccessfully";
            header("refresh:1; url=admin_rn.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repair Noticse information : admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



    <!-- -------------------------- table section-------------------------- -->

    
    <div class="container mt-3">
    <div class="md-4  d-flex ">
                <a href="adm.php" type="button" class="btn btn-dark" >ย้อนกลับ</a >
            </div>
            <br>
        <div class="row">
            <div class="col-md-6">
                    <h1> Repair Notices information </h1>
            </div>
          

        </div>
        <hr>
        <br>
        <?php if(isset($_SESSION['success'])) { ?>   <?php ?>
                <div class="alert alert-success" role="alert">  
            <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']); ?>
                </div>
            <?php } ?>

            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">  
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']); ?>
                    </div>
                <?php } ?>


    <!--  --------------User data---------------------- -->
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Device Name</th>
            <th scope="col">Service No.</th>
            <th scope="col">Complete Date</th>
            <th scope="col">Status</th>
           
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $stmt =$conn->query("SELECT * FROM repair_notices ");
                $stmt->execute(); 
                $rn_table = $stmt->fetchALL();

                if(!$rn_table){
                    echo"<tr> <td colpan='6' class='text-center'> No data found </td> </tr>";
                }else{
                    foreach  ($rn_table as $rn) {   // foreach = loop data in table
            ?>
            <tr>
                <th scope="row"><?php echo $rn['id']; ?> </th>
                <td><?php echo $rn['rn_dn']; ?>         </td>
                <td><?php echo $rn['rn_no']; ?>         </td>
                <td><?php echo $rn['rn_date']; ?>       </td>
                <td><?php echo $rn['rn_status']; ?>     </td>
      
                
                <td> <a href="adm_show_rn.php?id=<?= $rn['id']; ?>"  class="btn btn-secondary">More</a>  </td>    
            </tr>
        <?php }} ?>   
        </tbody>
    </table>
            
</div>
            
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>