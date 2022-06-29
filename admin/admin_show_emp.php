<?php 
    session_start();
    require_once "../connect_db.php";

    if(isset($_POST['com_insert'])){
        $com_sn = $_POST['com_sn'];
        $com_name = $_POST['com_name'];
        $com_owner = $_POST['com_owner'];
        $com_status  = $_POST['com_status'];
        $cpu =$_POST['cpu'];
        $ram =$_POST['harddisk'];
        $brand =$_POST['brand'];
        $model =$_POST['model'];
        $license =$_POST['$license'];
        $com_type = $_POST['com_type'];
}
        
        /* ------end of update section ------- */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computers edit : admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .container{
            max-width:1000px;
        }
    </style>

</head>
<body>
<?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM employees WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                    }
                ?>
  
            <!-- show modal-showmore started-->
           
            <a href="admin_emp.php" class="btn btn-warning"> back </a>
            <div class="container position-absolute top-50 start-50 ">
                
            <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">employee #id</th>
            <th scope="col">firstname</th>
            <th scope="col">lastname</th>
            <th scope="col">nickname</th>
            <th scope="col">department</th>
            <th scope="col">phone</th>
            <th scope="col">extn</th>
          

            </tr>
        </thead>
        <tbody>
            <?php 
                $stmt =$conn->query("SELECT employees.*,department.*,workline.*,workgroup.* FROM employees 
                LEFT JOIN department ON employees.department=department.id
                LEFT JOIN  workline ON employees.workline=workline.id
                LEFT JOIN  workgroup ON employees.workgroup=workgroup.id");
                
                $stmt->execute(); 
              
                $users_table = $stmt->fetchALL();

                if(!$users_table){
                    echo"<tr><td colpan='6' class='text-center'> No data found </td> </tr>";
                }else{
                    foreach  ($users_table as $users ) {   // foreach = loop data in table
            ?>
            <tr>
                <th scope="row"><?php echo $users['id']; ?> </th>
                <td><?php echo $users['employee_id']; ?>    </td>
                
                <td><a href="admin_show_emp.php"><?php echo $users['fname_thai'];?></a></td>
                <td><?php echo $users['lname_thai'] ;  ?> </td>
                <td><?php echo $users['nickname']; ?>  </td>
                <td><?php echo $users['department_thai']; ?> </td>
                <td><?php echo $users['phone']; ?>  </td>     
                <td><?php echo $users['extn']; ?>  </td>          
                <td> 
                
                   
                </td>    
            </tr>
        <?php }} ?>   
        </tbody>
    </table>
                    </div>
    <!-- show modal started-->

</body>



