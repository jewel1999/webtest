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
    <title>Printer edit : admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>

  <div class="container mt-6"> 

        <!-- insert into data forms  -->   
        

    
    <!-- -------------------------- table section-------------------------- -->

    
    <div class="container mt-3">
    <div class="md-4  d-flex ">
                <a href="user_fin.php" type="button" class="btn btn-dark" >back</a >
            </div>
            <br>
        <div class="row">
            <div class="col-md-6">
                    <h1> Printer information </h1>
            </div>
    
        </div>
        <hr>
        <br>
        <?php if(isset($_SESSION['success'])) { ?>   <?php ?>
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
            <th scope="col">printner serial-number</th>
            <th scope="col">printer name</th>
            <th scope="col">owner</th>
            <th scope="col">status</th>
            <th scope="col">created time</th>
            <th scope="col">more</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                $stmt =$conn->query("SELECT * FROM printers");
                $stmt->execute(); 
                $users_table = $stmt->fetchALL();

                if(!$users_table){
                    echo"<tr><td colpan='6' class='text-center'> No data found </td> </tr>";
                }else{
                    foreach  ($users_table as $printer) {   // foreach = loop data in table
            ?>
            <tr>
                <th scope="row"><?php echo $printer['id']; ?> </th>
                <td><?php echo $printer['printer_sn']; ?>     </td>
                <td><?php echo $printer['printer_name']; ?>   </td>
                <td><?php echo $printer['printer_owner']; ?>  </td>
                <td><?php echo $printer['printer_status']; ?> </td>
                <td><?php echo $printer['create_at']; ?>      </td>       
                <td>   
                     <a  type="button" class="btn btn-info " data-bs-toggle="modal"  data-bs-target="#ShowModal" >Show All</a>
                </td>    
            </tr>
            <?php }} ?>   
        </tbody>
    </table>


    <!-- show modal-showmore started-->

        
                        
    <div class="modal" tabindex="-1" id="ShowModal">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Printer Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
                </div>
                
                <div class="modal-body" >
                    <table class="table table-bordered border-primary">
                    
                    
                    
                    
                    <?php 
                        if(isset($_POST['printer_update'])){
                            $id = $_POST['id'];
                            $showmore ="SELECT * FROM 'printers' WHERE id=$showmore_run ";
                            $showmore_run = mysqli_query($conn,$showmore);

                            while($row = mysqli_fetch_array($showmore_run)){
                                ?>
                                    <tr>
                            <th >#id</th>
                            <td><?php echo $row['id']; ?></td>

                        </tr>
                            <th>Printers serial-number</th>
                            <td><?php echo $row['printer_sn']; ?></td>

                        <tr>
                            <th>Printers name  </th>
                            <td><?php echo $row['printer_name']; ?></td>
                        </tr>

                        <tr>
                            <th>owner </th>  
                            <td><?php echo $row['printer_owner']; ?></td>      
                        </tr>  

                        <tr>
                            <th rowspan="2">Phone</th>
                            <td>123-45-678</td>
                        </tr>
                        <tr>
                            <td>212</td>
                        </tr>
                                <?php
                            }
                        }
                    ?>  
                    </table>
                </div>
                </div>
            </div>
            </div>
    <!-- show modal started-->
            
</div>
            
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>


