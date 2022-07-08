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
    <title>Repair Noticse information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <h1>ข้อมูลใบแจ้งซ่อมอุปกรณ์</h1>
            </div>
            <br>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="ค้นหาข้อมูลพนักงาน" 
                    aria-label="Search" id="SearchData">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

        </div>
        <hr>
        <br>
       
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
               
                
                <td>
                     <a href="fin_show_rn.php?id=<?= $rn['id']; ?>"  class="btn btn-secondary">Show</a>
                    
                </td>    
            </tr>
        <?php }} ?>   
        </tbody>
    </table>
            
</div>
            
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>