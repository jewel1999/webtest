<?php
    session_start();
    require_once '../connect_db.php';

   

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff information : ข้อมูลพนักงาน [Show all]</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

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
          

    <!--  --------------User data---------------------- -->
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Staff ID#</th>
            <th scope="col">Staff Name</th>
            <th scope="col">เบอร์ติดต่อภายใน</th>
            <th scope="col">แผนก</th>         
            <th scope="col">ชั้น</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                
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
                    
                    <a href="user_show_emp.php?id=<?= $staff['st_id']; ?>"  class="btn btn-dark">More</a>
                </td>    

                </tr>
            <?php }} ?>   
            </tbody>
            </table>
            </div>


            
            <!--+++++++++++++++++++++++++++ Modal staff info table  +++++++++++++++++++++++++++++-->


            <div class="modal fade" id="UserModalShowstaff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Staff information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>    

        <div class="modal-body"> 

        <!-- start table -->

        <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM staffinfo WHERE st_id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>
       

<?php 

                $sttt =$conn->query("SELECT staffinfo.*,department.*,workline.*,workgroup.* FROM staffinfo 
                LEFT JOIN department ON staffinfo.department_thai=department.id
                LEFT JOIN  workline ON staffinfo.workline_emp=workline.id
                LEFT JOIN  workgroup ON staffinfo.workgroup_emp=workgroup.id  WHERE staffinfo.st_id "  );
                $sttt->execute(); 
                $stafftable = $sttt->fetchALL();
                $sttt->execute(); 
              
                $users_table = $sttt->fetchALL();
                    foreach  ($users_table as $users ) {   // foreach = loop data in table
?>
                    
                    <div class="contianer">
                        <table class="border-primary mt-4">
                        <tr>
                            <th>id</th>
                            <td><?php echo $users['st_id']; ?></td>

                        </tr>

                        <tr>
                            <th>staff id</th>
                            <td><?php echo $users['staff_id']; ?></td>

                        </tr>

                        <tr>
                            <th>ชื่อจริง (ภาษาไทย) </th>
                            <td><?php echo $users['fname_thai']; ?></td>

                        </tr>

                        <tr>

                            <th>นามสกุล (ภาษาไทย)</th>
                            <td><?php echo $users['lname_thai']; ?></td>
                        </tr>

                        <tr>
                            <th>ชื่อ (ภาษาอังกฤษ)</th>
                            <td><?php echo $users['fname_eng']; ?></td>
                        </tr>

                        <tr>
                            <th>นามสกุล (ภาษาอังกฤษ)</th>
                            <td><?php echo $users['lname_eng']; ?></td>
                        </tr>
                        <tr>
                            <th>ชื่อเล่น</th>
                            <td><?php echo $users['nickname']; ?></td>
                        </tr>
                        <tr>
                            <th>ชั้น</th>
                            <td><?php echo $users['floor_']; ?></td>
                        </tr>
                        <tr>
                            <th>เบอร์ติดต่อ</th>
                            <td><?php echo $users['phonenumber']; ?></td>
                        </tr>
                        <tr>
                            <th>เบอร์ติดต่อภายใน</th>
                            <td><?php echo $users['extn']; ?></td>
                        </tr>
                        <tr>
                            <th>อีเมลล์ผู้ใช้งาน</th>
                            <td><?php echo $users['usermail']; ?></td>
                        </tr>

                        <tr>
                            <th>ส่วนการทำงาน</th>
                            <td><?php echo $users['workgroup_emp']; ?></td>
                        </tr>
                        
                        <tr>
                            <th>สายการทำงาน</th>
                            <td><?php echo $users['workline_emp']; ?></td>
                        </tr>
                        <tr>
                            <th>แผนก</th>
                            <td><?php echo $users['department_thai']; ?></td>
                        </tr>
                        <tr>
                            <th>แผนก (ภาษาอังกฤษ)</th>
                            <td><?php echo $users['department_eng']; ?></td>
                        </tr>
                        <tr>
                            <th>สถานะพนักงาน </th>
                            <td><?php echo $users['status_staff']; ?></td>
                        </tr>
                        <tr>
                            <th>station</th>
                            <td><?php echo $users['station']; ?></td>
                        </tr>

                    </table>
                    <?php } ?>   
           
        </div>
        
        </div>
    </div>
    </div>   
    </div>   

    


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
                        <option value="headstation">Head station</option>  
                        <option value="branch">Branch</option>  
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
