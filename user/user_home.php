<?php
    session_start();
    require_once "../connect_db.php";

 /*   if(!isset($_SESSION['user_login'])){   
            $_SESSION['error']= 'กรุณาเข้าสู่ระบบ !' ;
            header('location:index.php');
        }else if(isset($_SESSION['user_hrm'])){   
            $_SESSION['error']= 'กรุณาเข้าสู่ระบบ !' ;
            header('location:index.php');
        }else if(isset($_SESSION['user_adm'])){   
            $_SESSION['error']= 'กรุณาเข้าสู่ระบบ !' ;
            header('location:index.php');
        }else if(isset($_SESSION['user_fin'])){   
            $_SESSION['error']= 'กรุณาเข้าสู่ระบบ !' ;
            header('location:index.php');
        }*/
 ?>

<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Homepage</title>
    <link rel="stylesheet" href="../hometest.css">
</head>
<body>

<!--navbar header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light px-4 mt-3">
  <div class="container-fluid">
    <a class="navbar-brand px-4" href="#">IT-Support</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_fin_emp.php">สมุดโทรศัพท์</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_fin_emp.php">ข้อมูลพนักงาน</a>
        </li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ข้อมูลอุปกรณ์
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="user_fin_com.php">Computer</a></li>
            <li><a class="dropdown-item" href="user_fin_printer.php">Printer</a></li>
            <li><a class="dropdown-item" href="user_fin_other.php">Hardware</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="user_rin_rn.php">ใบแจ้งซ่อม</a></li>
            </ul>
        </li>
        
      </ul>
        
        <button class="btn btn-outline-danger" type="logout" href="logout.php" >logout</button>
      
    </div>
  </div>
</nav>
<!--navbar header end -->


    
<!--slide header started -->
<header class=" text-black text-center">
    <div class="container mt-6">
        <div class="row">            
            <div class=" col-md-10 col-lg-8 col-xl-7 mx-auto ">
                <form action="">
                    <div class="d-flex flex-col  mx-auto">
                        <div class="align-middle col-md-9 mb-2 md-0 ">
                            <input type="text" class="form-control form-control-lg " placeholder="ค้นหาที่นี่ ..... ">    
                        </div>
                        <div class="col-12 col-md-3">
                            <button type="submit" class="btn btn-block btn-lg btn-primary" > Search </button>
                        </div> 
                    </div>
                </form>
                <div class="col-xl-9 mx-auto">
                 <h5 class="mt-3 mb-2 bg-light  text-secondary">you can all serch for name,phone,department etc.</h5>
                </div> 
            </div>
        </div>
    </div>
</header>
<!--slide header end -->


<!-- features icons started -->

<section class="feature-icons bg-light text-center">
    <div class="container">
    <div class="row">

        <!-- #1 -->
        <div class="col-lg-4">
            <div class="feature-icons-item mx-auto mb-5 mb-lg-3">
                <div class="feature-icons-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                    <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                    </svg>
                </div>
                <h5 href="users\user_document.php">documentation</h5>
                <p >all flie download for everyone <br> and can upload file to admin</p>

            </div>
        </div>
        <!-- #2 -->
        <div class="col-lg-4">
            <div class="feature-icons-tem mx-auto mb-5 mb-lg-3">
                <div class="feature-icons-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-motherboard" viewBox="0 0 16 16">
                    <path d="M11.5 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5Zm2 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5Zm-10 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6Zm0 2a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6ZM5 3a1 1 0 0 0-1 1h-.5a.5.5 0 0 0 0 1H4v1h-.5a.5.5 0 0 0 0 1H4a1 1 0 0 0 1 1v.5a.5.5 0 0 0 1 0V8h1v.5a.5.5 0 0 0 1 0V8a1 1 0 0 0 1-1h.5a.5.5 0 0 0 0-1H9V5h.5a.5.5 0 0 0 0-1H9a1 1 0 0 0-1-1v-.5a.5.5 0 0 0-1 0V3H6v-.5a.5.5 0 0 0-1 0V3Zm0 1h3v3H5V4Zm6.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2Z"/>
                    <path d="M1 2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-2H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 9H1V8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6H1V5H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 2H1Zm1 11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v11Z"/>
                    </svg>
                </div>
                <h5>hardware-shelf system</h5>
                <p >hardware-shelf </p>

            </div>
        </div>
        <!-- #3 -->
        <div class="col-lg-4">
            <div class="feature-icons-tem mx-auto mb-5 mb-lg-3">
                <div class="feature-icons-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
                    </svg>
                </div>
                <h5>table list information</h5>
                <p >show all about computer <br>,printer,hardware amd employees</p>

            </div>
        </div>
        </div>
</div>
</section>

<!-- features icons end -->

<!-- image shoecase section started -->

    <section class="showcase" >
        <div class="container-fluid p-0">
           
            <div class="row g-0">
                <div class="col-lg-6 text-white order-lg-2 showcase-img" style="background-image:url('../pic/comservice.jpg') " ></div>
                <div class="col-lg-6  my-auto showcase-text">
                    <h2>what is spam ?</h2>
                    <p class="lead mb-0"> this is webpage for test webtext web maintain it-support mini project that preform summer internship </p>
                </div>
            </div>

            <div class="row g-0">
                <div class="col-lg-6  text-white showcase-img" style="background: url('../pic/comservice.jpg');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Easy to check</h2>
                    <p class="lead mb-0"> this is webpage for test webtext web maintain it-support mini project that preform summer internship </p>
                </div>
            </div>

            <div class="row g-0">
                <div class="col-lg-6 text-white order-lg-2 showcase-img" style="background: url('../pic/comservice.jpg');"></div>
                <div class="col-lg-6  my-auto showcase-text">
                    <h2>what is computer security</h2>
                    <p class="lead mb-0"> this is webpage for test webtext web maintain it-support mini project that preform summer internship </p>
                </div>
            </div>
        
        </div>
</section>
<!-- image shoecase section end -->

<!-- section admin-team starrted -->

<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5 mt-5">admin it-support</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonials-item mx-auto mb-5 mb-lg-0">
                    <img src="../pic/Basic_Ui__28186_29.jpg" class="img-fluid rounded-circle mb-3" alt="" >
                    <h5> admin</5>
                    <p class="font-weight-light mb-0">i'll support your working .</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="testimonials-item mx-auto mb-5 mb-lg-0">
                    <img src="../pic/Basic_Ui__28186_29.jpg" class="img-fluid rounded-circle mb-3" alt="" >
                    <h5> admin</5>
                    <p class="font-weight-light mb-0">i'll support your working .</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="testimonials-item mx-auto mb-5 mb-lg-0">
                    <img src="../pic/Basic_Ui__28186_29.jpg" class="img-fluid rounded-circle mb-3" alt="" >
                    <h5> admin</5>
                    <p class="font-weight-light mb-0">i'll support your working .</p>
                </div>
            </div>

        </div>
    </div>
     </section>

<!-- section admin-team end -->


<!-- footer section started -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5><i class="fa fa-road"></i> IT-Support </h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="">Contract</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Security Policy</a></li>
                            <li><a href="">Admin Team</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="">Documentation</a></li>
                            <li><a href="">Support</a></li>
                            <li><a href="">Legal Terms</a></li>
                            <li><a href="">Support Team</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                </ul>
                <br>
            </div>
        </div>
    </div>
</footer>





<!-- footer section ended -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>