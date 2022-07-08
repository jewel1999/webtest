<?php
    session_start();
    require_once '../connect_db.php';

    if(isset($_GET['com_insert'])){
        $com_sn = $_GET['com_sn'];
        $com_name = $_GET['com_name'];
        $com_owner = $_GET['com_owner'];
        $com_status  = $_GET['com_status'];}
        

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

    <!-- -------------------------- table section-------------------------- -->

    
    <div class="container mt-3">
    <div class="md-4  d-flex ">
                <a href="user_fin.php" type="button" class="btn btn-dark" > back</a >
            </div>
            <br>
        <div class="row">
            <div class="col-md-6">
                    <h1> Computer information </h1>
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
            <th scope="col">created time</th>
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
                <td><?php echo $computers['create_at']; ?>  </td>       
                <td> 
                    
                     <a href="user_fin_update_com.php? id=<?= $computers['id']; ?>"  class="btn btn-secondary">More</a>
                    
                </td>    
            </tr>
        <?php }} ?>   
        </tbody>
    </table>
            
</div>
            
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>