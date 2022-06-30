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
                <a href="user_home.php" type="button" class="btn btn-dark" >back</a >
            </div>
            <br>
        <div class="row">
            <div class="col-md-12">
                    <h1> Staff information </h1>
                    <p class="text-secondary" >all user</p>

                  <br>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="ค้นหาข้อมูลพนักงาน" 
                    aria-label="Search" id="SearchData">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <br>
                <br>
          

    <!--  --------------User data---------------------- -->
    <table class="table ">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">รหัสพนักงาน</th>
            <th scope="col">ชื่อ-สกุล (ภาษาไทย)</th>   
            <th scope="col">ชื่อเล่น</th>
            <th scope="col">แผนก</th>
            <th scope="col">เบอร์โทรศัพท์</th>
            <th scope="col">หมายเลขภายใน</th>
            <th scope="col">#</th>

            </tr>
        </thead>
        <tbody>
            <?php 
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
                
                <td><a href="admin_show_emp.php "><?php echo $users['fname_thai'];?></a>&nbsp;<?php echo $users['lname_thai'] ;  ?></td>
                
                <td><?php echo $users['nickname']; ?>  </td>
                <td><?php echo $users['department']; ?> </td>
                <td><?php echo $users['phone']; ?>  </td>     
                <td><?php echo $users['extn']; ?>  </td>          
                <td>
                
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#UserModalShowstaff">More </button>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#UserModalUpdateStaff">Update</button>   
                </td>    
                        
            </tr>
        <?php }} ?>   
        </tbody>
    </table>
    </div> 
</div>
</div>
</div>
            
<!-- Modal staff info table  -->
<div class="modal fade" id="UserModalShowstaff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Department table</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>    

        <div class="modal-body"> 

        <!-- start table -->
        <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM  WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>

<?php 
                $stmt =$conn->query("SELECT employees.*,department.*,workline.*,workgroup.* FROM employees 
                LEFT JOIN department ON employees.department=department.id
                LEFT JOIN  workline ON employees.workline=workline.id
                LEFT JOIN  workgroup ON employees.workgroup=workgroup.id  WHERE employees.id='12' "  );
                
                $stmt->execute(); 
              
                $users_table = $stmt->fetchALL();

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }else{
                    foreach  ($users_table as $users ) {   // foreach = loop data in table
            ?>
                    
                    <div class="contianer">
                        <table class="  border-primary ">
                        <tr>
                            <th>staff id</th>
                            <td><?php echo $users['employee_id']; ?></td>

                        </tr>
                            <th>ชื่อจริง (ภาษาไทย) </th>
                            <td><?php echo $users['fname_thai']; ?></td>

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
                            <td><?php echo $users['phone']; ?></td>
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
                            <td><?php echo $users['workgroup_name']; ?></td>
                        </tr>
                        
                        <tr>
                            <th>สายการทำงาน</th>
                            <td><?php echo $users['workline_name']; ?></td>
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
                            <td><?php echo $users['status_user']; ?></td>
                        </tr>
                        <tr>
                            <th>station</th>
                            <td><?php echo $users['station']; ?></td>
                        </tr>

                    </table>
                    <?php }} ?>   
           
        </div>
        
        </div>
    </div>
    </div>   


    
   <!-- Modal staff info table  -->
<div class="modal fade" id="UserModalUpdateStaff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Department table</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>    

        <div class="modal-body"> 

        <!-- start table -->
        <?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM  WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>

<?php 
                $stmt =$conn->query("SELECT employees.*,department.*,workline.*,workgroup.* FROM employees 
                LEFT JOIN department ON employees.department=department.id
                LEFT JOIN  workline ON employees.workline=workline.id
                LEFT JOIN  workgroup ON employees.workgroup=workgroup.id  WHERE employees.id='12' "  );
                
                $stmt->execute(); 
              
                $users_table = $stmt->fetchALL();

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }else{
                    foreach  ($users_table as $users ) {   // foreach = loop data in table
            ?>
                    
                    <div class="contianer">
                        <table class="  border-primary ">
                        <tr>
                            <th>staff id</th>
                            <td><?php echo $users['employee_id']; ?></td>

                        </tr>
                            <th>ชื่อจริง (ภาษาไทย) </th>
                            <td><?php echo $users['fname_thai']; ?></td>

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
                            <td><?php echo $users['phone']; ?></td>
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
                            <td><?php echo $users['workgroup_name']; ?></td>
                        </tr>
                        
                        <tr>
                            <th>สายการทำงาน</th>
                            <td><?php echo $users['workline_name']; ?></td>
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
                            <td><?php echo $users['status_user']; ?></td>
                        </tr>
                        <tr>
                            <th>station</th>
                            <td><?php echo $users['station']; ?></td>
                        </tr>

                    </table>
                    <?php }} ?>   
           
        </div>
        
        </div>
    </div>
    </div>   



    <?php include_once('script.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>