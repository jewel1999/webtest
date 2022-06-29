<?php
    session_start();
    require_once '../connect_db.php';

    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $deletestmt = $conn->query ("DELETE FROM department WHERE id = $delete_id");
        $deletestmt->execute();

        if($deletestmt){
            echo"<script> alert('data hasbeen deleted successfully ');  </script>";
            $_SESSION['success']="data has been deleted sccessfully";
            header("refresh:1; url=admin_department.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computers information : admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="modal fade" id="UserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Department</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>    

        <div class="modal-body"> 
            <form action="admin_insert_department.php" method="post" enctype="multiplepart/form-data">
            <div class="mb-3">
                <label for="department_name" class="col-form-label">ชื่อแผนก (ภาษาไทย)</label>
                <input type="text" class="form-control" name="department_name">
            </div>
            
            <div class="mb-3">
                <label for="workgroup" class="col-form-label">Workgroup</label>
                <input type="text" class="form-control" name="workgroup">
            </div>

            <div class="mb-3">
                <label for="workline" class="col-form-label">Workline</label>
                <input type="text" class="form-control" name="workline">
            </div>
            
        
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="dep_insert" class="btn btn-success">submit</button>
        </div>
            </form>
           
        </div>
        
        </div>
    </div>
    </div>

    <!-- -------------------------- table section-------------------------- -->
    
    <div class="container mt-3">
    <div class="md-4  d-flex ">
                <a href="admin.php" type="button" class="btn btn-dark" > back</a >
            </div>
            <br>
        <div class="row">
            <div class="col-md-6">
                    <h1>Department List</h1>
            </div>
            <div class="col-md-6  d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#UserModal">Insert Department</button>
            </div>

        </div>
        <hr>
        <br>
        <?php if(isset($_SESSION['success'])) { ?>   
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
    <table class="table ">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Depatment</th>
            <th scope="col">workgroup</th>
            <th scope="col">workline</th>
            <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $stdp =$conn->query("SELECT * FROM department");
                // $stwg =$conn->query("SELECT * FROM workgroup");
                // $stwl =$conn->query("SELECT * FROM workline");
                $stdp->execute(); 

               

                $department_table = $stdp->fetchALL();
                // $workgroup_table = $stwg->fetchALL();
                // $workline_table = $stwl->fetchALL();

                if(!$department_table){
                    echo"<tr> <td colpan='6' class='text-center'> No data found </td> </tr>";
                }else{
                    foreach  ($department_table as $departments ) {   // foreach = loop data in table
            ?>
            <tr>
                <th scope="row"><?php echo $departments['id']; ?> </th>
                <td><?php echo $departments['department_name']; ?>     </td>
                <td><?php echo $departments['workgroup']; ?>   </td>
                <td><?php echo $departments['workline']; ?>  </td>
                <td> 
                   
                    <a href="admin_edit_department.php?id=<?= $departments['id']; ?>"  class="btn btn-warning">Edit</a>
                    <a href="?delete=<?= $departments['id']; ?>"  class="btn btn-danger" onclick="return confirm('are you sure to delete ?')" >Delete</a>
                </td>    
            </tr>
        <?php }} ?>   
        </tbody>
    </table>
            
</div>
            
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>