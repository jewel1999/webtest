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
   
    <!-- icon sidebar cdn-->
    <script src="https://unpkg.com/feather-icons"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Place this tag in your head or just before your close body tag. ["garph"] -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- <style>
        .sidebar{
            postion:fixed;
            top:0;
            bottom:0;
            left:0;
            z-index: 100;
            padding:90px 0 0;
            box-shadow: inset -1px 0 0 rgba(0,0,0,0.1);
        }

        @media (max-width: 768px){
            .sidebar{
                top : 11.5 rem;
                padding:0;
            }
        }

        .navbar{
            box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
        }

        @media (min-width: 768px ){
            .navbar{
                top:0;
                position:sticky;
                z-index:999;
            }
        }
        .sidebar .nav-link{
            color: #333 ;
        }
    </style> -->

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
        
        <div class="dropdown px-3 mt-1">
        <button class="btn btn-md btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" 
        data-bs-toggle="dropdown" aria-expanded="false">Hello,admin :)</button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="admin_proflie.php">Proflie</a></li>
            <li><a class="dropdown-item" href="#">notification</a></li>
            <li><a class="dropdown-item" href="#">message</a></li>
            <hr>
            <li><a class="dropdown-item" href="logout.php">logout</a></li>
        </ul>
        </div>
    </div>
    </nav> 



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
                                    
                                    <!-- sidebar icon set -->
                                    <li class="nav-item mt-4"> 
                                    <a href="logout.php" class="nav-link active" aria-current="page">
                                    <i class=" text-danger" data-feather="power" > </i>
                                    <span class="ml-2 text-danger">logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                 
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
                                    <p class="card-text text-secondary">text for description </p>  
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
                                    <p class="card-text text-secondary">text for description </p>    
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
                                    <p class="card-text text-secondary">text for description </p>    
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
                                         echo "<h4> $pdoRowCount  </h4>";  
                                    ?>
                                    <!---add txt for describe -->
                                    <?php 
                                         $pdoQuery = "SELECT status_user FROM employees WHERE status_user='active'" ;
                                         $pdoResult = $conn->query($pdoQuery);
                                         $pdoRowCount = $pdoResult->rowCount();
                                         
                                    ?>
                                    <p class="card-text">users active : <?php echo " $pdoRowCount  "; ?> </p>
                                    <!---add txt for describe -->
                                    <p class="card-text text-secondary">text for description </p>  
                                    </div>   
                            </div>
                        </div>
         <!------------------- end of box section --------------------->
                    </div>

        <!------------------- started table section ------------------->
        
        <div class="card">
        <h5 class="card-header">recently update</h5>
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
                $stmt =$conn->query("SELECT * FROM employees");
                $stmt->execute(); 
                $users_table = $stmt->fetchALL();

                if(!$users_table){
                    echo"<tr><td colpan='6' class='text-center'> No data found </td> </tr>";
                }else{
                    foreach  ($users_table as $users) {   // foreach = loop data in table
            ?>
            <tr>
                <th scope="row"><?php echo $users['id'];?> </th>
                <td><?php echo $users['employee_id']; ?> </td>
                
                <td><a href="admin_show_emp.php "><?php echo $users['fname_thai'];?></a></td>
                <td><?php echo $users['lname_thai'] ;  ?> </td>
                <td><?php echo $users['nickname']; ?>  </td>
                <td><?php echo $users['department']; ?> </td>
                <td><?php echo $users['phone']; ?>  </td>     
                <td><?php echo $users['extn']; ?>  </td>          
                   
            </tr>
            <?php }} ?>   
            </tbody>
            </table>  
            <a href="admin_emp.php" class="btn btn-block btn-secondary d-flex flex justify-item-center justify-content-center"> view all</a>
            </div>
        </div>  
        </div>
    </div>
</div>
</div>
                        
                
                
                </div>
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



    <script src="https://cdn.jsdelivr.net/chartist.js/lastest/Chartlist.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
   
    <script> feather.replace()

    new Chartist.Line('#traffic-chart',{
        labels:['week 1','week 2','week 3','wekk 4'],
        series:[
            [2300,5000,8700,4800]
        ]
    }); 
    </script>
    
</body>
</html>