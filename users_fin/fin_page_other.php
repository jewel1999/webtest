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
    <title>Other [Hardware] : admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>



    <!-- -------------------------- table section-------------------------- -->

    
    <div class="container mt-3">
    <div class="md-4  d-flex ">
                <a href="fin.php" type="button" class="btn btn-dark" >ย้อนกลับ</a >
            </div>
            <br>
        <div class="row">
            <div class="col-md-6">
                    <h1>ข้อมูลอุปกรณ์อื่นๆ (อุปกรณ์อิเล็กทรอนิกส์)</h1>
                    <p>  (อุปกรณ์อิเล็กทรอนิกส์)</p>
            </div>
            <br>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="ค้นหาข้อมูลพนักงาน" 
                    aria-label="Search" id="SearchData">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            <hr>

    <!--  --------------User data---------------------- -->
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Device no.</th>
            <th scope="col">Device name</th>
            <th scope="col">Device Type</th>
            <th scope="col">Device status</th>
           
        
            </tr>
        </thead>
        <tbody>
            <?php 
                $stmt =$conn->query("SELECT * FROM other_device ");
                $stmt->execute(); 
                $device_other_table = $stmt->fetchALL();

                if(!$device_other_table){
                    echo"<tr> <td colpan='6' class='text-center'> No data found </td> </tr>";
                }else{
                    foreach  ($device_other_table as $device_other) {   // foreach = loop data in table
            ?>
            <tr>
                <th scope="row"><?php echo $device_other['id']; ?> </th>
                <td><?php echo $device_other['device_no']; ?>     </td>
                <td><?php echo $device_other['device_name']; ?>   </td>
                <td><?php echo $device_other['device_type']; ?>  </td>
                <td><?php echo $device_other['device_status']; ?> </td>
             
              
            </tr>
        <?php }} ?>   
        </tbody>
    </table>
            
</div>
            
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>