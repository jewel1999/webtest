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
    <title>Employee information : ข้อมูลพนักงาน </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- -------------------------- table section-------------------------- -->
 
    <div class="container mt-3">
    <div class="md-12  d-flex ">
                <a href="user_fin.php" type="button" class="btn btn-dark" >back</a >
            </div>
            <br>
        <div class="row">
            <div class="col-md-12">
                    <h1> Employee information </h1>

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
                <td> <a href="user_fin_update_emp.php ?id=<?= $users['id']; ?>"  class="btn btn-secondary">More</a></td>    
            </tr>
        <?php }} ?>   
        </tbody>
    </table>
    </div> 
</div>
</div>
</div>
            
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>