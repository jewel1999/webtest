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
    <title>ข้อมูลพนักงาน : Staff information  </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- -------------------------- table section-------------------------- -->
 
    <div class="container mt-3">
    <div class="md-12  d-flex ">
                <a href="fin.php" type="button" class="btn btn-dark" >ย้อนกลับ</a >
            </div>
            <br>  
            <div class="row">
            <div class="col-md-6">
                <h1>ข้อมูลพนักงาน</h1>
            </div>
            <br>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="ค้นหาข้อมูลพนักงาน" 
                    aria-label="Search" id="SearchData">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>
            

                    <p class="text-secondary" >Humance Resource</p>

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
            <th scope="col">รหัสพนักงาน</th>
            <th scope="col">ชื่อ-สกุล พนักงาน</th>
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
                    
                    <a href="fin_show_emp.php?id=<?= $staff['st_id']; ?>"  class="btn btn-dark">More</a>
                  
                   
                </td>    

                </tr>
            <?php }} ?>   
            </tbody>
            </table>
            </div>


            
            <!--+++++++++++++++++++++++++++ Modal staff info table  +++++++++++++++++++++++++++++-->



    <?php include_once('script.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>
