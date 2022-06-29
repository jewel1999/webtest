<?php
    session_start();
    require_once '../connect_db.php';

    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $deletestmt = $conn->query ("DELETE FROM computers WHERE id = $delete_id");
        $deletestmt->execute();

        if($deletestmt){
            echo"<script> alert('data hasbeen deleted successfully ');  </script>";
            $_SESSION['success']="data has been deleted sccessfully";
            header("refresh:1; url=admin_com.php");
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
            <h5 class="modal-title" id="exampleModalLabel">Insert Computer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>    

        <div class="modal-body"> 
            <form action="admin_insert_com.php" method="post" enctype="multiplepart/form-data">
            <div class="mb-3">
                <label for="com_sn" class="col-form-label">Compuster serial-number</label>
                <input type="text" class="form-control" name="com_sn">
            </div>
            <div class="mb-3">
                <label for="com_name" class="col-form-label">Compuster name</label>
                <input type="text" class="form-control" name="com_name">
            </div>
            <div class="mb-3">
                <label for="com_owner" class="col-form-label">Compuster owner</label>
                <input type="text" class="form-control" name="com_owner">
            </div>

            <!-- computer type -->
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Computer Type</label>
                <select class="form-select" id="inputGroupSelect01" name="com_type">
                    <option selected>select type</option>
                    <option value="all-in-one">all-in-one</option>
                    <option value="pc-laptop">pc-laptop</option>
                    <option value="notebook">notebook</option>
                </select>
            </div>
            <!-- computer type ended -->

            <div class="mb-3">
                <label for="cpu" class="col-form-label">CPU</label>
                <input type="text" class="form-control" name="cpu">
            </div>
            <div class="mb-3">
                <label for="ram" class="col-form-label">RAM</label>
                <input type="text" class="form-control" name="ram">
            </div>
            <div class="mb-3">
                <label for="harddisk" class="col-form-label">Harddisk</label>
                <input type="text" class="form-control" name="harddisk">
            </div>
            <div class="mb-3">
                <label for="brand" class="col-form-label">Brand</label>
                <input type="text" class="form-control" name="brand">
            </div>
            <div class="mb-3">
                <label for="modelcom" class="col-form-label">Model</label>
                <input type="text" class="form-control" name="modelcom">
            </div>
            <div class="mb-3">
                <label for="license" class="col-form-label">License</label>
                <input type="text" class="form-control" name="license">
            </div>

            <div class="mb-3">
                <label for="price" class="col-form-label">Price</label>
                <input type="text" class="form-control" name="price">
            </div>

            <!-- status -->
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Status</label>
                <select class="form-select" id="inputGroupSelect01" name="com_status">
                    <option selected>status</option>
                    <option value="active">active</option>
                    <option value="empty">empty</option>
                </select>
            </div>
                       
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="com_insert" class="btn btn-success">submit</button>
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
                    <h1> Computer information </h1>
            </div>
            <div class="col-md-6  d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#UserModal">Insert computer </button>
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
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">computer serial-number</th>
            <th scope="col">computer name</th>
            <th scope="col">owner</th>
            <th scope="col">status</th>         
            <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $stmt =$conn->query("SELECT * FROM computers");
                $stmt->execute(); 
                $computer_table = $stmt->fetchALL();

                if(!$computer_table){
                    echo"<tr> <td colpan='6' class='text-center'> No data found </td> </tr>";
                }else{
                    foreach  ($computer_table as $computers) {   // foreach = loop data in table
            ?>
            <tr>
                <th scope="row"><?php echo $computers['id']; ?> </th>
                <td><?php echo $computers['com_sn']; ?>     </td>
                <td><?php echo $computers['com_name']; ?>   </td>
                <td><?php echo $computers['com_owner']; ?>  </td>
                <td><?php echo $computers['com_status']; ?> </td>
                <td> 
                    
                    <a href="admin_show_com.php?id=<?= $computers['id']; ?>"  class="btn btn-secondary">ReadMore</a>
                    <a href="admin_edit_com.php?id=<?= $computers['id']; ?>"  class="btn btn-warning">Edit</a>
                    <a href="?delete=<?= $computers['id']; ?>"  class="btn btn-danger" onclick="return confirm('are you sure to delete ?')" >Delete</a>
                </td>    
            </tr>
        <?php }} ?>   
        </tbody>
    </table>
            
</div>
            
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>