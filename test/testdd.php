<?php
    session_start();
    require_once '../connect_db.php';

    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $deletestmt = $conn->query("DELETE FROM employees WHERE id = $delete_id");
        $deletestmt->execute();

        if($deletestmt){
            echo"<script> alert('data hasbeen deleted successfully ');  </script>";
            $_SESSION['success']="data has been deleted sccessfully";
            header("refresh:1; url=admin_com.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard : admin</title>
<<<<<<< HEAD
    
    
=======
   
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
    <!-- icon sidebar cdn-->
    <script src="https://unpkg.com/feather-icons"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Place this tag in your head or just before your close body tag. ["garph"] -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
<<<<<<< HEAD
    <!-- <script type="text/javascript" src="script.js "></script> -->
=======

>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
</head>

<body>

    <nav class="navbar navbar-primary bg-light">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-lg-0 flex-wrap flex-md-nowrap justify-cotent-between">
            <a href="#" class="navbar-brand ml-2 px-4">Admin dashboard</a>

            <button class="navbar-toggler d-md-none collapsed mb-3 " type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>

         <!-- <div class="col-12 col-md-4 col-lg-2">
            <input type="text" class="form-comntrol form-control-dark" placeholder="search" aria-label="search">
        </div> -->

        <div class="col-12 col-md-5 col-lg-8 d-flex align-citems-center justify-content-md-end mt-3 mt-md-0">
        <div class="mr-3 mt-1 px-1">
            <!-- Place this tag where you want the button to render. 
                <a class="github-button px-3" href="https://github.com/themesberg/simple-bootstrap-5-dashboard" 
                data-icon="octicon-star" data-size="large" data-show-count="true" 
                aria-label="Star themesberg/simple-bootstrap-5-dashboard on GitHub">Star</a>
        </div>-->
        <div class="container">
        <button type="button" class="btn btn-danger" href="../logout.php">Logout</button>
        </div>
    </nav> 


    <!-- sidebar started -->
    <div class="container-fluid">
                <div class="row">
                    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collpase">
                        <div class="position-sticky"> 
                            <ul class="nav flex-column">
                                
                            <li class="nav-item mt-4"> 
                                    <!-- sidebar icon set -->
                                    <a href="admin_com.php"class="nav-link active" aria-current="page">
                                    <i data-feather="airplay"  > </i>
                                    <span class="ml-3 ">computer</span>
                                    </a>
                                    </li>
                                    <!-- sidebar icon set -->
                                    <li class="nav-item mt-4"> 
                                    <a  href="admin_printer.php" class="nav-link active" aria-current="page">
                                    <i data-feather="printer" ></i>
                                    <span class="ml-3">printer</span>
                                    </a>
                                    </li>
                                    <!-- sidebar icon set -->
                                    
                                    <li class="nav-item mt-4"> 
                                    <a href="admin_other.php" class="nav-link active" aria-current="page">
                                    <i data-feather="cpu"  ></i>
                                    <span class="ml-3">hardware</span>
                                    </a>
                                    </li>
                    
                                     <!-- sidebar icon set -->
                                     <li class="nav-item mt-4"> 
                                    <a href="admin_emp.php" class="nav-link active" aria-current="page">
                                    <i data-feather="users"  ></i>
                                    <span class="ml-3" >employee</span>
                                    </a>
                                    </li>
                                    <!-- sidebar icon set -->
                                    <li class="nav-item mt-4"> 
                                    <a href="admin_rn.php"class="nav-link active" aria-current="page">
                                    <i data-feather="clipboard"  > </i>
                                    <span class="ml-2" >repair notics</span>
                                    </a>
                                    </li>
                                    <!-- sidebar icon set -->
                                    <li class="nav-item mt-4"> 
                                    <a href="#" class="nav-link active" aria-current="page">
                                    <i data-feather="map"  > </i>
                                    <span class="ml-2">device tracking</span>
                                    </a>
                                    </li>
                                    
                                    <hr>
                        
                                    <!-- sidebar icon set -->
                                    <li class="nav-item mt-4"> 
                                    <a href="about.php" class="nav-link active" aria-current="page">
                                    <i data-feather="info" > </i>
                                    <span class="ml-2">about</span>
                                    </a>
                                    </li>
                                    
                            </ul>
                        </div>
                    </nav>
    <!-- sidebar started -->         

                <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4"> 
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a> </li>
                            <li class="breadcrumb-item active" aria-current="page">Overview</li>
                        </ol> 
                    </nav>

                    <h1 class="h2">Dashboard</h1>
                    <p class="text-secondary"> This is a homepage of a simple admin interface which is part of web-hardware-maintain for it-support </p>

                    <div class="row my-4">
                        <!-- box for show count row table-->
                        <div class="col-12 col-md-6 col-lg-3 mb-lg-0">
                            <div class="card" href="admin_com.php">
                                <h5 class="card-header" href="admin_com.php ">computer</h5>
                                    <div class="card-body">
                                        <!---show count rows on display -->
                                        <?php 
                                         $pdoQuery = "SELECT * FROM computers" ;
                                         $pdoResult = $conn->query($pdoQuery);
                                         $pdoRowCount = $pdoResult->rowCount();
                                         echo "<h4> $pdoRowCount  </h4>";  
                                        ?>
                                    <!---add txt for describe -->
                                    <?php 
                                         $pdoQuery = "SELECT com_status FROM computers WHERE com_status='active' " ;
                                         $pdoResult = $conn->query($pdoQuery);
                                         $pdoRowCount = $pdoResult->rowCount();
                                         
                                    ?>
                                    <p class="card-text">computer active : <?php echo " $pdoRowCount  "; ?> </p>
                                    <!---add txt for describe -->
                                    <p class="card-text text-secondary">description: all data about computer in storage that can update for this active now.</p>  
                                    </div>   
                            </div>
                        </div>
                        <!-- box for show count row table-->
                        <div class="col-12 col-md-6 col-lg-3 mb-lg-0">
                            <div class="card">
                                <h5 class="card-header">printer</h5>
                                    <div class="card-body">
                                    <!---show count rows on display -->
                                    <?php 
                                         $pdoQuery = "SELECT * FROM printers" ;
                                         $pdoResult = $conn->query($pdoQuery);
                                         $pdoRowCount = $pdoResult->rowCount();
                                         echo "<h4> $pdoRowCount  </h4>";  
                                    ?>
                                    <!---add txt for describe -->
                                    <?php 
                                         $pdoQuery = "SELECT printer_status FROM printers WHERE printer_status='active' " ;
                                         $pdoResult = $conn->query($pdoQuery);
                                         $pdoRowCount = $pdoResult->rowCount();
                                         
                                    ?>
                                    <p class="card-text">printer active : <?php echo " $pdoRowCount  "; ?> </p>
                                    <!---add txt for describe -->
                                    <p class="card-text text-secondary">description: all data that show printer in storage can be using or not ready.</p>    
                                    </div>   
                            </div>
                        </div>

                        <!-- box for show count row table-->
                        <div class="col-12 col-md-6 col-lg-3 mb-lg-0">
                            <div class="card">
                                <h5 class="card-header">hardware</h5>
                                    <div class="card-body">
                                    <!---show count rows on display -->
                                    <?php 
                                         $pdoQuery = "SELECT * FROM other_device" ;
                                         $pdoResult = $conn->query($pdoQuery);
                                         $pdoRowCount = $pdoResult->rowCount();
                                         echo "<h4> $pdoRowCount  </h4>";  
                                    ?>
                                    <!---add txt for describe -->
                                    <?php 
                                         $pdoQuery = "SELECT device_status FROM other_device WHERE device_status='active'" ;
                                         $pdoResult = $conn->query($pdoQuery);
                                         $pdoRowCount = $pdoResult->rowCount();
                                         
                                    ?>
                                    <p class="card-text">device active : <?php echo " $pdoRowCount  "; ?> </p>
                                    <!---add txt for describe -->
                                    <p class="card-text text-secondary">description:data electronics eqipment that can  update for active or not ready to using.</p>    
                                    </div>   
                            </div>
                        </div>

                        <!-- box for show count row table-->
                        <div class="col-12 col-md-6 col-lg-3 mb-lg-0">
                            <div class="card">
                                <h5 class="card-header">employee</h5>
                                    <div class="card-body">
                                    <!---show count rows on display -->
                                    <?php 
                                         $pdoQuery = "SELECT * FROM employees" ;
                                         $pdoResult = $conn->query($pdoQuery);
                                         $pdoRowCount = $pdoResult->rowCount();
                                         echo "<h4> $pdoRowCount </h4>";  
                                    ?>
                                    <!---add txt for describe -->
                                    <?php 
                                         $pdoQuery = "SELECT status_user FROM employees WHERE status_user='active'" ;
                                         $pdoResult = $conn->query($pdoQuery);
                                         $pdoRowCount = $pdoResult->rowCount();
                                         
                                    ?>
                                    <p class="card-text">users active : <?php echo " $pdoRowCount  "; ?> </p>
                                    <!---add txt for describe -->
                                    <p class="card-text text-secondary">description:for data all about data of employees details that be active now </p>  
                                    </div>   
                            </div>
                        </div>
                        </div>
        <!------------------- end of box section --------------------->
<<<<<<< HEAD
                <button type="button" class="btn btn-primary   " data-bs-toggle="modal" data-bs-target="#UserModal">Insert Department Group</button>
                <hr>
                <button type="button" class="btn btn-info  " data-bs-toggle="modal" data-bs-target="#UserModalworkgroup">Insert workgroup</button>
                <button type="button" class="btn btn-secondary   " data-bs-toggle="modal" data-bs-target="#UserModalworkline">Insert workline</button>
                <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#UserModaldepartment">Insert department</button>

                <hr>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#UserModaldepline">Insert Depratment line</button>
        <!------------------- insert modal type "working line" section  started --------------------->

        
<!--                     
=======
                <button type="button" class="btn btn-primary   " data-bs-toggle="modal" data-bs-target="#UserModal">Insert Workgroup </button>
        <!------------------- insert modal type "working line" section  started --------------------->
                    
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
        <div class="modal fade" id="UserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Department</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>    

        <div class="modal-body"> 
            <form action="admin_insert_com.php" method="post" enctype="multiplepart/form-data">
            <div class="mb-3">
                <label for="workgroup_name" class="col-form-label">Workgroup</label>
                <input type="text" class="form-control" name="workgroup_name">
            </div>
            <div class="mb-3">
                <label for="workline_name" class="col-form-label">Workline</label>
                <input type="text" class="form-control" name="workline_name">
            </div>
            <div class="mb-3">
                <label for="department_name" class="col-form-label">Department</label>
                <input type="text" class="form-control" name="department_name">
            </div>

                       
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="depline_insert" class="btn btn-success">submit</button>
        </div>
            </form>
           
        </div>
        
        </div>
    </div>
<<<<<<< HEAD
    </div> -->



<!------------------- insert workgroup modal ------------------->


    <div class="modal fade" id="UserModalworkgroup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert workgrorup table</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>    

        <div class="modal-body"> 
            <form action="insert_workgroup.php" method="post" enctype="multiplepart/form-data">
            <div class="mb-3">
                <label for="workgroup_id" class="col-form-label">workgroup id</label>
                <input type="text" class="form-control" name="workgroup_id">
            </div>
            <div class="mb-3">
                <label for="workgroup_name" class="col-form-label">workgroup name</label>
                <input type="text" class="form-control" name="workgroup_name">
            </div>
                         
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="workgroup_table" class="btn btn-success">submit</button>
        </div>
            </form>
           
        </div>
        
        </div>
    </div>
    </div>

    <!------------------- insert workline modal ------------------->


    <div class="modal fade" id="UserModalworkline" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert workline table</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>    

        <div class="modal-body"> 
            <form action="insert_workline.php" method="post" enctype="multiplepart/form-data">
            <div class="mb-3">
                <label for="workgroup_id" class="col-form-label">workgroup id</label>
                <input type="text" class="form-control" name="workgroup_id">
            </div>
            <div class="mb-3">
                <label for="workline_id" class="col-form-label">workline id</label>
                <input type="text" class="form-control" name="workline_id">
            </div>
            <div class="mb-3">
                <label for="workline_name" class="col-form-label">workline name</label>
                <input type="text" class="form-control" name="workline_name">
            </div>

                       
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="workline_table" class="btn btn-success">submit</button>
        </div>
            </form>
           
        </div>
        
        </div>
    </div>
    </div>


       <!------------------- insert department modal------------------->
        
        

    
    <div class="modal fade" id="UserModaldepartment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Department table</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>    

        <div class="modal-body"> 
            <form action="insert_department.php" method="post" enctype="multiplepart/form-data">
            <div class="mb-3">
                <label for=workline_id class="col-form-label">workline id</label>
                <input type="text" class="form-control" name=workline_id>
            </div>
            <div class="mb-3">
                <label for="department_id" class="col-form-label">department id</label>
                <input type="text" class="form-control" name="department_id">
            </div>
            <div class="mb-3">
                <label for="department_thai" class="col-form-label">department name (thai)</label>
                <input type="text" class="form-control" name="department_thai">
            </div>

            <div class="mb-3">
                <label for="department_eng" class="col-form-label">department name (english)</label>
                <input type="text" class="form-control" name="department_eng">
            </div>
                       
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="department_table" class="btn btn-success">submit</button>
        </div>
            </form>
           
        </div>
        
        </div>
    </div>
    </div>
=======
    </div>


>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a


        <!------------------- started table section ------------------->
        
<<<<<<< HEAD
       
=======
        
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a

<!-- footer started -->

                <footer class="pt-5 d-flex justify-content-between"> 
                    <span class="px-2 ">copyright &copy; 2022 <a href="https://themesberg.com" > jewel sp :)</a></span>
                    <ul class="nav m-0">
                        <li class="nav-item"> 
                            <a href="#" class="nav-link text-secondary" aria-current="page">Privacy Policy </a>
                        </li>

                        <li class="nav-item"> 
                            <a href="#" class="nav-link text-secondary" >Terms and conditions</a>
                        </li>

                        <li class="nav-item"> 
                            <a href="#" class="nav-link text-secondary" >Contact</a>
                        </li>

                    </ul>
                </footer>
                </main>
    </div>

<<<<<<< HEAD
    
<!-- footer ended -->

<!------------------- insert department modal------------------->
        
  

<div class="modal fade" id="UserModaldepline" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert workgrorup table</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>    

        <div class="modal-body"> 
            <form action="insert_workgroup.php" method="post" enctype="multiplepart/form-data">
            <div class="mb-3">

        <div class="form-group col-md-6">
       <label>workgroup</label>
       <select id="provinces" name='province' class="form-control" required>
         <option selected="selected" value=''>--เลือก--</option>
         <?php
         $province = "SELECT * from workgroup order by id ASC";
         $stmt = $conn->prepare($province);
         $stmt->execute();
         foreach ($stmt as $value) {
          ?>
          <option value="<?= $value['id'] ?>"><?= $value['workgroup_name'] ?></option>
         <?php } ?>
        </select>
      </div>

      <div class="form-group col-md-6">
       <label>workline</label>
       <select id="amphures" name='district' class="form-control" required> </select>
      </div>

      <div class="form-group col-md-6">
       <label>department</label>
       <select id="districts" name='subdistrict' class="form-control" required></select>
      </div>


            </form>
           
        </div>
        
        </div>
    </div>
    </div>
=======
    <script>  </script>




<!-- footer ended -->

>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a

    <script src="https://cdn.jsdelivr.net/chartist.js/lastest/Chartlist.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
   
    <script> feather.replace()</script>
    
<<<<<<< HEAD
  <?php include_once('script.php'); ?>
</body>
</html>
 

=======
</body>
</html>
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
