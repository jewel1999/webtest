<?php
    session_start();
    require_once '../connect_db.php';

    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
<<<<<<< HEAD
        $deletestmt = $conn->query("DELETE FROM staffinfo WHERE st_id = $delete_id");
=======
        $deletestmt = $conn->query("DELETE FROM employees WHERE id = $delete_id");
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
        $deletestmt->execute();

        if($deletestmt){
            echo"<script> alert('data hasbeen deleted successfully ');  </script>";
            $_SESSION['success']="data has been deleted sccessfully";
            header("refresh:1; url=admin_emp.php");
        }
    }

<<<<<<< HEAD
    
=======
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Staff information : ข้อมูลพนักงาน [Show all]</title>
=======
    <title>Employee information : admin</title>
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<<<<<<< HEAD
    <!-- -------------------------- table section-------------------------- -->
 
    <div class="container mt-3">
    <div class="md-12  d-flex ">
                <a href="admin.php" type="button" class="btn btn-dark" >back</a >
            </div>
            <br>
            <div class="row">
            <div class="col-md-6">
                    <h1> Staff  information </h1>
            </div>
            <div class="col-md-6  d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#StaffInsertModal">Insert staff</button>
            </div>

            </div>
            

                    <p class="text-secondary" >admin</p>

                  <br>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="ค้นหาข้อมูลพนักงาน" 
                    aria-label="Search" id="SearchData">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <br>
                <br>
          
=======
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

>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a

    <!--  --------------User data---------------------- -->
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
<<<<<<< HEAD
            <th scope="col">Staff ID#</th>
            <th scope="col">Staff Name</th>
            <th scope="col">เบอร์ติดต่อภายใน</th>
            <th scope="col">แผนก</th>         
            <th scope="col">ชั้น</th>
            <th scope="col">Action</th>
=======
            <th scope="col">employee #id</th>
            <th scope="col">firstname</th>
            <th scope="col">lastname</th>
            <th scope="col">nickname</th>
            <th scope="col">department</th>
            <th scope="col">phone</th>
            <th scope="col">extn</th>
            <th scope="col">action</th>

>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
            </tr>
        </thead>
        <tbody>
            <?php 
<<<<<<< HEAD
                
                $stmt =$conn->query("SELECT staffinfo.*,department.*,workline.*,workgroup.* FROM staffinfo 
                LEFT JOIN department ON staffinfo.department_thai=department.id
                LEFT JOIN  workline ON staffinfo.workline_emp=workline.id
                LEFT JOIN  workgroup ON staffinfo.workgroup_emp=workgroup.id  WHERE staffinfo.st_id "  );
                $stmt->execute(); 
                $stafftable = $stmt->fetchALL();

                if(!$stafftable){
                    echo"<tr> <td colpan='6' class='text-center'> No data found </td> </tr>";
                }else{
                    foreach  ($stafftable as $staff) {   // foreach = loop data in table
            ?>
            <tr>
                <th scope="row"><?php echo $staff['st_id']; ?> </th>
                <td><?php echo $staff['staff_id']; ?> </td>
                <td><?php echo $staff['fname_thai']; ?> &nbsp; <?php echo $staff['lname_thai']; ?>     </td>
                <td><?php echo $staff['extn']; ?>  </td>
                <td><?php echo $staff['department_thai']; ?> </td>
                <td><?php echo $staff['floor_']; ?> </td>
                
                <td> 
                    
                    <a href="admin_show_emp.php?id=<?= $staff['st_id']; ?>"  class="btn btn-dark">More</a>
                    <a href="admin_edit_emp.php?id=<?= $staff['st_id']; ?>"  class="btn btn-warning">Edit</a>
                    <a href="?delete=<?= $staff['st_id']; ?>"  class="btn btn-danger" onclick="return confirm('are you sure to delete ?')" >Delete</a>
                </td>    

                </tr>
            <?php }} ?>   
            </tbody>
            </table>
            </div>


            
            <!--+++++++++++++++++++++++++++ Modal staff info table  +++++++++++++++++++++++++++++-->

    <!-- insert staff info-->
       

    <div class="modal fade" id="StaffInsertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>    

        <div class="modal-body"> 

                    <div class="contianer">
                      
                    <form action="admin_insert_emp.php" method="post" enctype="multiplepart/form-data">
                  
                    <div class="mb-3">
                            <label for="staff_id" class="col-form-label">Staff ID</label>
                            <input type="text" class="form-control" name="staff_id">
                    </div>
                    <div class="mb-3">
                            <label for="fname_thai" class="col-form-label">ชื่อจริง (ภาษาไทย)</label>
                            <input type="text" class="form-control" name="fname_thai">
                    </div>
                    <div class="mb-3">
                            <label for="lname_thai" class="col-form-label">นามสกุล (ภาษาไทย)</label>
                            <input type="text" class="form-control" name="lname_thai">
                    </div>
                    <div class="mb-3">
                            <label for="fname_eng" class="col-form-label">ชื่อจริง (ภาษาอังกฤษ)</label>
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
                    <label for="sex" class="col-form-label">เพศ</label>
                    <select name="sex" class="form-select" aria-label="Default select example">
                        <option selected> --- select ---</option>
                        <option value="male">male</option>  
                        <option value="female">female</option>  
                    </select>
                    </div>

                    <div class="mb-3">
                            <label for="extn" class="col-form-label">เบอร์ติดต่อภายใน</label>
                            <input type="text" class="form-control" name="extn">
                    </div>
                    <div class="mb-3">
                            <label for="floor_" class="col-form-label">ชั้น</label>
                            <input type="text" class="form-control" name="floor_">
                    </div>


                        <!-- Departmant line Dynamic dropdown-->

                        <label>Workgroup</label>
                        <select id="provinces" name="workgroup_emp" class="form-control" required>
                        <option selected="selected" value=''>--เลือก Workgroup--</option>
                        <?php
                        $province = "SELECT * from workgroup order by id ASC";
                        $stmt = $conn->prepare($province);
                        $stmt->execute();
                        foreach ($stmt as $value) {
                        ?>
                        <option value="<?= $value['id'] ?>"><?= $value['workgroup_name'] ?></option>
                        <?php } ?>
                        </select>

                        <div class="mb-3">
                            <label for="workline_emp" class="col-form-label">Workline</label>
                            <select id="amphures" name="workline_emp"class="form-control" required> </select>

                        </div> <div class="mb-3">
                            <label for="department_thai" class="col-form-label">Department</label>
                            <select id="districts" name="department_thai" class="form-control" required></select>
                        </div>
                        

                        </div> <div class="mb-3">
                        <label>Deprtment english</label>
                        <select id="department_eng" name="department_eng" class="form-control" required>
                        <option selected="selected" value=''>--เลือก--</option>
                        <?php
                        $province = "SELECT * from department order by id ASC";
                        $stmt = $conn->prepare($province);
                        $stmt->execute();
                        foreach ($stmt as $value) {
                        ?>
                        <option value="<?= $value['id'] ?>"><?= $value['department_eng'] ?></option>
                        <?php } ?>
                        </select>
                        </div>
                        <!-- Departmant line Dynamic dropdown ended -->

                    <div class="mb-3">
                            <label for="usermail" class="col-form-label">Usermail</label>
                            <input type="text" class="form-control" name="usermail">
                    </div>
                    <div class="mb-3">
                            <label for="phonenumber" class="col-form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="phonenumber">
                    </div>

                    <div class="mb-3">
                    <label for="status_staff" class="col-form-label">สถานะพนักงาน</label>
                    <select  name="status_staff"  class="form-select" aria-label="Default select example">
                        <option selected> --- select ---</option>
                        <option value="Active">Active</option>  
                        <option value="Empty">Empty</option>  
                    </select>
                    </div>

                    <div class="mb-3">
                    <label for="station" class="col-form-label">Station</label>
                    <select name="station" class="form-select" aria-label="Default select example">
                        <option selected> --- select ---</option>
                        <option value="Headstation">Head station</option>  
                        <option value="Branch">Branch</option>  
                    </select>
                    </div>
                    <hr>

                    <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="emp_insert" class="btn btn-success">submit</button>
        </div>
                    </form>

                    <?php ?>    
        </div>
        </div>
    </div>
    </div>   
    </div>   





    <?php include_once('script.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>
=======
                $stmt =$conn->query("SELECT * FROM employees");
                $stmt->execute(); 
                $users_table = $stmt->fetchALL();

                if(!$users_table){
                    echo"<tr><td colpan='6' class='text-center'> No data found </td> </tr>";
                }else{
                    foreach  ($users_table as $users) {   // foreach = loop data in table
            ?>
            <tr>
                <th scope="row"><?php echo $users['id']; ?> </th>
                <td><?php echo $users['employee_id']; ?>    </td>
                
                <td><a href="admin_show_emp.php "><?php echo $users['fname_thai'];?></a></td>
                <td><?php echo $users['lname_thai'] ;  ?> </td>
                <td><?php echo $users['nickname']; ?>  </td>
                <td><?php echo $users['department']; ?> </td>
                <td><?php echo $users['phone']; ?>  </td>     
                <td><?php echo $users['extn']; ?>  </td>          
                <td> 
                
                    <a href="admin_show_emp.php ?id=<?= $users['id']; ?>"  class="btn btn-secondary">More</a>
                    <a href="admin_edit_emp.php ?id=<?= $users['id']; ?>"  class="btn btn-warning">Edit</a>
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
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
