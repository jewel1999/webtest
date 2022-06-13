<?php
    session_start();
    require_once '../connect_db.php';

    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $deletestmt = $conn->query("DELETE FROM employees WHERE id = $delete_id");
        $deletestmt->execute();

        if($deletestmt){
            echo"<script> alert('data hasbeen deleted successfully ');  </script>";
            $_SESSION['success']="data has been deleted sccessfully";
            header("refresh:1; url=admin_emp.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee information : admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="modal fade" id="UserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>    

        <div class="modal-body">   <!-- form for insert data -->        
            <form action="admin_insert_emp.php" method="post" enctype="multiplepart/form-data">

            <div class="mb-3">
                <label for="employee_id" class="col-form-label">employee id :</label>
                <input type="text" class="form-control" name="employee_id">
            </div>
            <div class="mb-3">
                <label for="fname_thai" class="col-form-label">ชื่อจริง</label>
                <input type="text" class="form-control" name="fname_thai">
            </div>
            <div class="mb-3">
                <label for="lname_thai" class="col-form-label">นามสกุล</label>
                <input type="text" class="form-control" name="lname_thai">
            </div>
            <div class="mb-3">
                <label for="fname_eng" class="col-form-label">ชื่อจริง(ภาษาอังกฤษ)</label>
                <input type="text" class="form-control" name="fname_eng">
            </div>
            <div class="mb-3">
                <label for="lname_eng" class="col-form-label">นามสกุล (ภาษาอังกฤษ)</label>
                <input type="text" class="form-control" name="lname_eng">
            </div>
            <div class="mb-3">
                <label for="nickname" class="col-form-label">ชื่อเล่น</label>
                <input type="text" class="form-control" name="nickname">
            </div>
            <div class="mb-3">
                <label for="floor_" class="col-form-label">ชั้น</label>
                <input type="text" class="form-control" name="floor_">
            </div>
            <div class="mb-3">
                <label for="extn" class="col-form-label">เบอร์ติดต่อภายใน</label>
                <input type="text" class="form-control" name="extn">
            </div>
            <div class="mb-3">
                <label for="usermail" class="col-form-label">อีเมลล์พนักงาน</label>
                <input type="text" class="form-control" name="usermail">
            </div>
            <div class="mb-3">
                <label for="phone" class="col-form-label">เบอร์ติดต่อ</label>
                <input type="text" class="form-control" name="phone">
            </div> <div class="mb-3">
                <label for="sex" class="col-form-label">เพศ</label>
                <input type="text" class="form-control" name="sex">
            </div>
            <div class="mb-3">
                <label for="workgroup" class="col-form-label">ส่วนการทำงาน</label>
                <input type="text" class="form-control" name="workgroup">
            </div>

             <div class="mb-3">
                <label for="workline" class="col-form-label">สายการทำงาน</label>
                <input type="text" class="form-control" name="workline">
            </div> <div class="mb-3">
                <label for="department" class="col-form-label">แผนก</label>
                <input type="text" class="form-control" name="department">
            </div>
            <div class="mb-3">
                <label for="department_eng" class="col-form-label">แผนก(ภาษาอักฤษ)</label>
                <input type="text" class="form-control" name="department_eng">
            </div>
            <div class="mb-3">
                <label for="status_user" class="col-form-label">สถานะพนักงาน</label>
                <input type="text" class="form-control" name="status_user">
            </div>

            <div class="mb-3">
                <label for="station" class="col-form-label">station</label>
                <input type="text" class="form-control" name="station">
            </div>

            <div class="modal-footer">
            <a type="button" class="btn btn-secondary" href="admin_emp.php">Close</a>
            <button type="submit" name="emp_insert" class="btn btn-primary" href="admin_insert_emp.php" >insert</button>
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
                    <h1> Employee information </h1>
            </div>
            <div class="col-md-6  d-flex justify-content-end">
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#UserModal">Insert Employee </button>
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
            <th scope="col">emplonee id :</th>
            <th scope="col">firstname</th>
            <th scope="col">lastname</th>
            <th scope="col">nickname</th>
            <th scope="col">department</th>
            <th scope="col">phone</th>
            <th scope="col">extn</th>
            <th scope="col">action</th>

            </tr>
        </thead>
        <tbody>
            <?php 
                $stmt =$conn->query("SELECT * FROM employees");
                $stmt->execute(); 
                $users_table = $stmt->fetchALL();

                if(!$users_table){
                    echo"<tr> <td colpan='6' class='text-center'> No data found </td> </tr>";
                }else{
                    foreach  ($users_table as $users) {   // foreach = loop data in table
            ?>
            <tr>
                <th scope="row"><?php echo $users['id']; ?> </th>
                <td><?php echo $users['employee_id']; ?>    </td>
                
                <td><a href="admin.php?id='.$users['fname_thai'].'"><?php echo $users['fname_thai'];?></a></td>
                <td><?php echo $users['lname_thai'] ;  ?> </td>
                <td><?php echo $users['nickname']; ?>  </td>
                <td><?php echo $users['department']; ?> </td>
                <td><?php echo $users['phone']; ?>  </td>     
                <td><?php echo $users['extn']; ?>  </td>          
                <td> 
                
                    <a href="admin_show_emp.php?id=<?= $users['id']; ?>"  class="btn btn-secondary">More</a>
                    <a href="admin_edit_emp.php?id=<?= $users['id']; ?>"  class="btn btn-warning">Edit</a>
                    <a href="?delete=<?= $users['id']; ?>"  class="btn btn-danger" onclick="return confirm('are you sure to delete ?')" >Delete</a>
                </td>    
            </tr>
        <?php }} ?>   
        </tbody>
    </table>
            
</div>
            
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>